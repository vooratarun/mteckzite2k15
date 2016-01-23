<?php
$dbhost = "localhost";
$dbuser = "tz_2k15";
$dbpass = "rgukt123";
$dbname = "tz_2k15";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('Error in database Selection');
?>
