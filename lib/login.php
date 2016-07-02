<?php 
if (!session_id()) session_start();
	require_once './sql_init.php';

	if(isset($_POST['password']) && $_POST['password']!=''){
		$sql = "SELECT * FROM user WHERE code = ".$_POST['password'].";";
		$res = mysql_query($sql);
		$arr = mysql_fetch_array($res);
		if (isset($arr['id'])) {
			$_SESSION['name'] = $arr['love_name'];
			$_SESSION['user_id'] = $arr['id'];
			echo ct2($arr['love_name']);
		}
		else{
			echo 0;
		}
	}
	else{
		echo 0;
	}


 ?>