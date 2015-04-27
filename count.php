<?php 
	require_once('utility.php');
	$link = connectDB();
	if (isset($_POST['count'])) {
		$user = $_POST['user'];
		$money = $_POST['money'];
		$card = $_POST['card'];

		
		$sql = "UPDATE `user` set `money` = '$money',`card`='$card' where `user` = '".mysqli_real_escape_string($link,$user)."'";
		$result = mysqli_query($link,$sql);
		
		echo ($result)?'done':'wrong';
	}
 ?>