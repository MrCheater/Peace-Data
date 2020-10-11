<?php 
include_once('../db_connect.php');

if (isset($_GET['token'])) {
$token = $_GET['token'];
$query = mysqli_query($connection,"SELECT * FROM transactions WHERE MD5(CONCAT(transactions.t_from,transactions.t_to,transactions.t_amount,transactions.t_timestamp)) = '$token'");
$row = mysqli_fetch_array($query);
if (mysqli_num_rows($query) > 0) {
	echo $row['t_timestamp'];
}
}
?>