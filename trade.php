<?php 
	require_once('utility.php');
	$link = connectDB();

	if (isset($_POST['newtrade'])) {
		$trade_id = sha1(microtime(true));
		$sql = "INSERT INTO `magiccamp`.`trade` (`t_id`, `trade_id`, `exc1`, `exc2`, `item1`, `item2`) 
					VALUES (NULL, '$trade_id', '1', '0', NULL, NULL)";
		$result = mysqli_query($link,$sql);
		echo $trade_id;
	}

	if (isset($_POST['confirm'])) {
		$trade_id = $_POST['TradeID'];
		$exc = $_POST['exc'];
		switch ($exc) {
			case 1:
				$sql = "UPDATE `trade` set `exc1`='1' where `trade_id` = '$trade_id'";
				break;
			case 2:
				$sql = "UPDATE `trade` set `exc2`='1' where `trade_id` = '$trade_id'";
				break;
		}
		$result = mysqli_query($link,$sql);

		$sql = "SELECT if(`exc1`=1 and `exc2`=1,1,0) from `trade` where `trade_id` = '$trade_id'";
		$result = mysqli_query($link,$sql);
		$check = mysqli_fetch_row($result)[0];

		echo $check?'confirm':'notyet';
	}
	if (isset($_POST['trade'])) {
		$trade_id = $_POST['TradeID'];
		$exc = $_POST['exc'];
		$trade = $_POST['trade'];
		$lock = $_POST['lock'];
		$money = $_POST['money'];
		switch ($exc) {
			case 1:
				$sql = "UPDATE `trade` set `item1`='$trade',`lock1` = '$lock',`money1` = '$money' where `trade_id` = '$trade_id'";
				break;
			case 2:
				$sql = "UPDATE `trade` set `item2`='$trade',`lock2` = '$lock',`money2` = '$money' where `trade_id` = '$trade_id'";
				break;
		}
		$result = mysqli_query($link,$sql);
		echo $result?'confirm':'notyet';
	}
	if (isset($_POST['refresh'])) {
		$trade_id = $_POST['TradeID'];
		$exc = $_POST['exc'];
		switch ($exc) {
			case 1:
				$sql = "SELECT `item2`,`lock2`,`money2` from `trade` where `trade_id` = '$trade_id'";
				break;
			case 2:
				$sql = "SELECT `item1`,`lock1`,`money1` from `trade` where `trade_id` = '$trade_id'";
				break;
		}
		$result = mysqli_query($link,$sql);
		$row = mysqli_fetch_row($result);
		
		echo $row[1].'<=>'.$row[2].'<=>'.$row[0];


	}


 ?>