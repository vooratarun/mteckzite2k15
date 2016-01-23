<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "katravalli";
$dbname = "tz_2k15";
mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
mysql_select_db($dbname) or die('Error in database Selection');
?>
