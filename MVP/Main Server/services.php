<?php include_once("assets/modules/header/index.php"); ?> 


<div class="content">
	<div class="center_content">
		<div class="side_content">

		<div class="group" id="group_big">
		<input type="text" required="" autocomplete="off" name="e_login" class="search_apps">
		<span class="highlight"></span>
		<label>Сервисы и приложения</label>
	    </div>

		<?php

		if (isset($_GET['app'])) { $app_id = $_GET['app']; }
		$result = mysqli_query($connection, "SELECT * FROM merchant");
		while ($row = mysqli_fetch_array($result)) {?>
		<a href="services?app=<?=md5('app:'.$row['m_id']);?>" class="sc_item_block <?php if (md5('app:'.$row['m_id']) == $app_id) { echo 'sc_active'; } ?>">
				<img src="<?=$row['m_icon'];?>" class="sc_icon">
				<span class="sc_title"><?=$row['m_title'];?></span>
		</a>
	    <?php } ?>
		</div>
		<div class="main_content">
			<?php 
			if (isset($app_id)) {
				$query = mysqli_query($connection,"SELECT * FROM merchant WHERE MD5(CONCAT('app:',merchant.m_id)) = '$app_id'");
				$row = mysqli_fetch_array($query);
				if (mysqli_num_rows($query) > 0) {?>
					<iframe src="<?=$row['m_url'].'?access_token='.$user['AccessToken'];?>" class="frame" allowfullscreen>
						Ваш браузер не поддерживает плавающие фреймы
					</iframe>
				<?php } } ?>
		</div>
	</div>
</div>



<script type="text/javascript">
	
function verifyMerchantTransaction(token) {
	$('.merchantVerifyWindow').modal({ showClose: false,  fadeDuration: 200 });
	$.get('api/verifyTransaction?token=' + token);
}

$('.mv_sms').click(function() {
	$('.mv_verify_sms').delay(1000).show(250);
	$('.mv_product_info').delay(1000).hide(250);
});

$('.mv_check').click(function() {
	$('.mv_verify_sms').delay(1000).hide(250);
	$('.mv_product_info').delay(1000).hide(250);
	$('.mv_verify_token').delay(1000).show(250);
});

$(".dm_btn").click(function(){
	$("#dm_content").show();
});

$(".p_btn").click(function(){
    $("#profile_content_block").show();
});

$(document).mouseup(function(e) {
    var dm_content = $("#dm_content");
    if (!dm_content.is(e.target) && dm_content.has(e.target).length === 0) {
        dm_content.hide();
    }

    var profile_content = $("#profile_content_block");
    if (!profile_content.is(e.target) && profile_content.has(e.target).length === 0) {
        profile_content.hide();
    }
});

$('.search_apps').keyup(function() {
    search_table($(this).val());
});

function search_table(value) {
    $('.sc_item_block').each(function() {
        var found = 'false';
        $(this).each(function() {
            if ($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0) {
                found = 'true';
            }
        });
        if (found == 'true') {
            $(this).show();
        } else {
            $(this).hide();
        }
    });
}

</script>