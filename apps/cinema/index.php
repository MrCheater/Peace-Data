<?php

include_once('db_connect.php'); 
include_once('vtb_api.php');
include_once('assets/css/style.php');

?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<title>Cinema</title>
</head>
<body>

<div class="content">
<div class="center_content">

<?php if (!isset($_GET['film'])) { ?>

<div class="group" id="group_big">
<input type="text" required="" autocomplete="off" name="e_login" class="search">
<span class="highlight"></span>
<label>Кинотеатр, фильм</label>
</div>

<a href="index.php?film=a87ff679a2f3e71d9181a67b7542122c" class="promo_block">
<img src="https://kino-city.ru/files/local/CMS_File/h0000/17861/17861.frame.small.jpg?1598369858" class="promo_image">
<span class="film_title">Довод</span>
<div class="film_params">
<span class="film_param">от 340₽</span>
<span class="film_param" style="color: #fff; background: #3F51B5;">12+</span>
<span class="film_param" style="color: #fff; background: #673AB7;">3D</span>
</div>
</a>

<div class="films_block">

<?php
$result = mysqli_query($connection, "SELECT * FROM cinema");
while ($row = mysqli_fetch_array($result)) { ?>

<a href="index.php?film=<?=md5($row['c_id']);?>" class="film_card">
<span class="age"><?=$row['c_age'];?></span>
<img src="<?=$row['c_image'];?>" class="film_preview">
<span class="film_title"><?=$row['c_title'];?></span>
<div class="film_params">
<span class="film_param"><?="от ".$row['c_price']."₽";?></span>
</div>
</a>

<?php } ?>

</div>

<?php } else { $film_id = $_GET['film'];

$query = mysqli_query($connection,"SELECT * FROM cinema WHERE MD5(cinema.c_id) = '$film_id'");
$row = mysqli_fetch_array($query);
if (mysqli_num_rows($query) !== 0) { ?>

<div class="nav_bar">
	<a href="index.php" class="nav_btn" style="float: left;"> ← Назад</a>
</div>
<div class="side_info">
<div class="film_card" style="pointer-events: none; margin: 0px;">
<img src="<?=$row['c_image'];?>" class="film_preview">
</div>
<form method="POST" action="">
<input type="submit" class="pay_btn" name="pay_btn" value="<?="Купить за ".$row['c_price']. "₽";?>">
</form>
</div>
<div class="main_info">
<span class="film_title_main">
<span class="film_rating"> <?=$row['c_age'];?> </span>
<?=$row['c_title'];?>
</span>
<span class="film_desc"><?=$row['c_desc'];?></span>
</div>

<?php 
if (isset($_POST['pay_btn'])) {
        $API = new API_Core();
        $Response = $API->sendTransaction("bdb1dd105679979ca82b28edd1c8ccd2", $row['c_price']);
        if ($Response['status'] == 'success') {
            if (isset($Response['Token'])) {
                $Token = $Response['Token'];
                echo $API->sendBankModal($Token);
            }
        }
}
?>

<?php } else { header("Location: index.php"); } } ?>
</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
    $('.search').keyup(function() {
        search_table($(this).val());
        if ($(this).val() !== '') {
        	$('.promo_block').hide();
        } else {
        	$('.promo_block').show();
        }
    });

    function search_table(value) {
        $('.film_card').each(function() {
            var found = 'false';
            $(this).each(function() {
                if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                    found = 'true';
                }
            });
            if (found == 'true') {
                $(this).show();
                $('.empty_block').hide();
            } else {
                $(this).hide();
                $('.empty_block').show();
            }
        });
    }
});
</script>
</body>
</html>