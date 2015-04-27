<?php 
	
	function connectDB()
	{
		$link = mysqli_connect('localhost','client','1qaz2wsx','magiccamp');
		mysqli_query($link,"SET NAMES 'UTF8'");
		
		return($link);
	}
	function powercheck($pow_require){
		if (isset($_SESSION['power'])) {
			$power = $_SESSION['power'];
			if ($power <= $pow_require) {
				
			}else{
				header('location:index.php');
			}
		}else{
			header('location:login.php');
		}
	}



 ?>