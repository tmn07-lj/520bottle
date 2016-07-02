<?php 
if (!session_id()) session_start();
	require_once './sql_init.php';

// $user_id = "1";

$user_id = $_SESSION['user_id'];

$sql = "SELECT * from list WHERE readed = 0 AND user_id = ".$user_id.";";

$res = mysql_query($sql);
$arr = mysql_fetch_array($res);

if (isset($arr['id'])) {
	$id = $arr['id'];
	$bottle_id = $arr[0]['bottle_id'];
	$sql = "SELECT * FROM bottle WHERE id = ".$bottle_id.";";
	$res2 = mysql_query($sql);
	$arr2 = mysql_fetch_array($res2);
	echo ct2($arr2['sentence']);

	$sql = "UPDATE list SET readed = '1' , get_time = CURRENT_TIMESTAMP WHERE id = $id;";
	mysql_query($sql);
	// echo $sql;
}
else {
	echo 0;
}
// $arr[0]['read'] = 1;


?>