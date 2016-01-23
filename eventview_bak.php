<?php
include "connect.php";
$ev=$_REQUEST['ev'];
$br=$_REQUEST['br'];
$q1=mysql_query("SELECT * FROM events WHERE category='$br' and ename='$ev'") or die(mysql_error());
while($row=mysql_fetch_array($q1))
{
echo $row['description'];

}
?>
