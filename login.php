<?php 
	require_once('utility.php');
	$link = connectDB();
	$ip=$_SERVER['REMOTE_ADDR'];

	if (isset($_POST['login'])) {
		$user = $_POST['user'];
		$pass = sha1($_POST['pass']);

		$sql = "SELECT IF(`pass` = '".mysqli_real_escape_string($link,$pass)."',IF(`login`=0,1,-1),0) from `user` where `user_id` = '".mysqli_real_escape_string($link,$user)."'";
		$result = mysqli_query($link,$sql);
		$output = mysqli_fetch_row($result)[0];

		if ($output==1&&$user!=13) {
			$sql = "UPDATE `user` set `login` = 1 where `pass` = '".mysqli_real_escape_string($link,$pass)."' and `user_id` = '".mysqli_real_escape_string($link,$user)."'";
			$result = mysqli_query($link,$sql);
		}
		echo (($output==1)?'check':(($output == -1)?'double':'wrong'));
		$sql = "INSERT INTO `magiccamp`.`log` (`log_id`, `index`,`ip`, `log_time`, `note`) VALUES (NULL, '$user','$ip', CURRENT_TIMESTAMP, '".(($output==1)?'check':(($output == -1)?'double':'wrong'))."');";
		$result = mysqli_query($link,$sql);
	}


	

 ?>
