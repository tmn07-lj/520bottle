<?php
 
if (!session_id()) session_start();
	require_once './sql_init.php';

$sql = "UPDATE list SET `readed` =  '0', `get_time` =  '0000-00-00 00:00:00' ;";

mysql_query($sql);

?>