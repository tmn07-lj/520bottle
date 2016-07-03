<?php 
if (!session_id()) session_start();
	require_once './sql_init.php';

	$user_id = 1;

	$sql = "SELECT * from list WHERE readed = 1 AND user_id = $user_id ORDER BY get_time DESC ;";

	$res = mysql_query($sql);
	$arr = mysql_fetch_array($res);


	$pre_time = strtotime($arr['get_time']) ;

	if (isset($pre_time)&&$pre_time!=NULL) {
		if ( ceil($pre_time/86400) != ceil(time()/86400)) { 
		 //除以86400然后取整，判断是否同一天
			echo 1;
		}
		else{
			echo 0;
		}
	}
	else{
		echo 1; // 第一次取，没有pretime，直接让取
	}
	



	?>
