<?php include_once("assets/modules/header/index.php"); ?> 

<div class="all_products">
	<div class="ap_center">
		<span class="ap_total">Карты</span>

	<div class="cards_block">
		<?php
		$result = mysqli_query($connection, "SELECT * FROM cards WHERE cards.card_connect = ".$user['u_id']);
		while ($row = mysqli_fetch_array($result)) {?>
		<div class="card">
			<span class="card_category">
			<?=$row['card_title'];?>
			<img src="https://online.vtb.ru/etc/designs/vtb24-online/static/brands/mir-color.svg" class="card_logo">
		</span>
		<span class="card_number"><?=join(" ", str_split(substr($row['card_number'], 0, 4) . str_repeat('*', strlen($row['card_number']) - 8) . substr($row['card_number'], -4), 4));?></span>
		<span class="card_value">1230,75 Руб.</span>
		</div>
	    <?php } ?>
	</div>

	</div>
</div>

<div class="content">
<div class="center_content">

</div>
</div>