<?php 
if (!session_id()) session_start();
	require_once './sql_init.php';

	// mysql_query($sql);

	// $user_id = $_SESSION['user_id'];
	$user_id = 1;

	$sql = "SELECT * from list WHERE readed = 1 AND user_id = $user_id ORDER BY get_time DESC ;";

	// echo $sql;
	$res = mysql_query($sql);
	$arr = mysql_fetch_array($res);

	// var_dump($arr['get_time']);

	$pre_time = strtotime($arr['get_time']) ;
	echo $pre_time;
	// var_dump (getdate());
	// echo time();
	if (isset($pre_time)&&$pre_time!=NULL) {
		isDiffDays($pre_time,time());
	}
	else{
		echo 1;
	}
	


//判断两天是否是同一天
function isDiffDays($last_date,$this_date){

    if(($last_date['year']===$this_date['year'])&&($this_date['yday']===$last_date['yday'])){
    	echo 0;
        return FALSE;
    }else{
    	echo 1;
        return TRUE;
    }
}


	?>
