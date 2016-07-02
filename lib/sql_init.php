<?php
$hostname = "localhost";
$dbuser = "root";
$dbpass = "root";
$dbname = 'bottle';
$link = mysql_connect($hostname, $dbuser, $dbpass);

mysql_select_db($dbname, $link);


function ct2($s){
    if(is_numeric($s)) {
        return intval($s);
    } else {
        return iconv("GBK","UTF-8",$s);
    }
}


?>