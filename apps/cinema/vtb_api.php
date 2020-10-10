<?php

session_id(); ob_start();

$settings = [
  "Protocol"    => "http",
  "ServerIP"    => "185.4.75.19:3004",
  "AppToken"    => "1c0bd86bb98f6752ca4cea68276dcc00",
];

class API_Core {

//Checking for a user session inside a mini-app

  function checkUserSession() {

    global $settings;

    if(!isset($_SESSION['AccessToken'])) {
      if (isset($_GET['AccessToken'])) {
        $_SESSION['AccessToken'] = $_GET['AccessToken'];
      } else {
        exit('Токен пользователя не был передан');
      }
    }
  }

  //Sending a transaction for confirmation by the user via the bank gateway API

  function sendTransaction($AccessToken, $Amount) {

    global $settings;

    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL             =>  $settings['Protocol'] . "://" . $settings['ServerIP'] ."/verify_transaction",
    CURLOPT_RETURNTRANSFER  =>  true,
    CURLOPT_ENCODING        =>  "",
    CURLOPT_MAXREDIRS       =>  10,
    CURLOPT_TIMEOUT         =>  0,
    CURLOPT_FOLLOWLOCATION  =>  true,
    CURLOPT_HTTP_VERSION    =>  CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST   =>  "GET",
    CURLOPT_HTTPHEADER      =>  array(
                                "AccessToken: " . $AccessToken,
                                "AppToken: "    . $settings['AppToken'],
                                "Amount: "      . intval($Amount)
)));

    $response = json_decode(curl_exec($curl), true);
    curl_close($curl);
    return $response;
}

//Displaying a modal window to confirm the operation through the parent's iframe

 function sendBankModal($Token) {
  return "<script type='text/javascript'>parent.verifyMerchantTransaction('" . $Token . "');</script>";
 }

}

?>