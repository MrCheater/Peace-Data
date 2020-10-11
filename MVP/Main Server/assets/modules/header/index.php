<?php

session_start(); ob_start();

include_once("db_connect.php"); 
include_once("assets/css/style.php");

if (isset($_SESSION['session_token'])) {
$session_token = $_SESSION['session_token'];
if ($session_token != null && $session_token != ""){
     $query = mysqli_query($connection,"SELECT * FROM users WHERE MD5(CONCAT(users.u_login,users.u_password)) LIKE '%$session_token%'");
     $row = mysqli_fetch_array($query);
     if (mysqli_num_rows($query) > 0){
      $user = array(
        "u_id"          =>  $row['u_id'],
        "u_login"       =>  $row['u_login'],
        "u_name"        =>  $row['u_name'],
        "u_surname"     =>  $row['u_surname'],
        "u_middle_name" =>  $row['u_middle_name'],
        "u_category"    =>  $row['u_category'],
        "AccessToken"   =>  md5('user:'.$row['u_id'])
      );
     } }
  } else {
  header("Location: auth?logout=true");
}
if (!isset($user)){  header("Location: auth?logout=true"); }

?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.modal.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">	

<div class="header">
	<div class="center_header">
		<a href="index"><img src="assets/img/logo.svg" class="logo"></a>
		<div class="menu_block">
			<a href="index" class="menu_item">Мои продукты</a>
			<a href="#" class="menu_item">Переводы</a>
			<a href="#" class="menu_item">Оплата услуг</a>
			<a href="services?app=b484c2bb24562db7dd17f32587e6607e" class="menu_item">Сервисы</a>
		</div>

		<div class="dropdown p_btn">
			<button class="dropbtn">
				<span class="chi_title"> <?=$user['u_name'].' '.$user['u_middle_name'];?></span>
			</button>

		<div id="profile_content_block" class="dropdown-content dc_logout" style="display: none;">
			<span class="dc_main_title"> Профиль </span>
			<div id="profile_content">
			<a href="#" class="dc_u_links"> Уведомления </a>
			<a href="#" class="dc_u_links"> Заказ справок </a>
			<a href="#" class="dc_u_links"> Новости </a>
			<a href="#" class="dc_u_links"> Помощь </a>
			<a href="auth?logout=true" class="dc_u_links"> Выход </a>
		</div>
	</div>
</div>
</div>
</div>


<div class="modal modal_message merchantVerifyWindow">
<span class="mm_title">
<span>Подтверждение оплаты</span>
<a href="" class="material-icons close_modal" rel="modal:close"> close </a>
</span>
<div class="modal_content">

<div class="merchant_v_block mv_product_info">
	<div class="mv_side">
		<img src="assets/img/apps_icons/films.png" class="mv_icon">
	</div>
	<div class="mv_main">
		<span class="mv_app_title">Кино</span>
		<span class="mv_app_desc">Описание: Довод 16+</span>
	</div>
	<div class="mv_total_block">
		Итого: <b>230₽</b>
		<span class="mv_btn mv_sms">Далее</span>
	</div>
</div>

<div class="mv_verify_sms" style="display: none;">
<span class="mv_sms_info">
	На Ваш номер <b>*925</b> отправлен SMS код. Для подтверждения перевода укажите его в поле ниже
</span>
<div class="group" id="group_big" style="margin-bottom: 10px; margin-top: 30px;">      
        <input type="email" required="" autocomplete="off" class="searchUserName" required="">
        <span class="highlight"></span>
        <label>Код подтверждения</label>
</div>
	<div class="mv_total_block">
	<span class="mv_btn mv_check">Осуществить перевод</span>
    </div>
</div>

<div class="mv_verify_token" style="display: none;">
<span class="mv_status">Успешно</span>

<div class="mv_total_block">
<a href="index" class="mv_btn" style="float: left;">На главную</a>
</div>
</div>

</div>
</div>