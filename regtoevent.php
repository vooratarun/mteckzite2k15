<?php
session_start();
if(isset($_SESSION['mobileuser']))
{
$user=$_SESSION['mobileuser'];
@include "connect.php";
if(isset($_REQUEST['eid']) && isset($_REQUEST['len']) && isset($_REQUEST['ids']))
{
$eid=$_REQUEST['eid'];
$ids=$_REQUEST['ids'];
$len=$_REQUEST['len'];
$ip=$_SERVER['REMOTE_ADDR'];
$tids=array();
$tids=explode("~",$ids);
$count=0;
$flag=0;
$cflag=0;

for($k=0;$k<count($tids);$k++)
	{
	$idche=mysql_fetch_array(mysql_query("SELECT tzid FROM registration WHERE tzid='".$tids[$k]."' "));
	if ($idche)
		$count++;
	else	
		echo $tids[$k]."ID NUMBER/S Not Registered<br>";
	}
	
		if($count==$len)
		{
	$k1=mysql_query("SELECT MAX(teamid) FROM teams WHERE eid='$eid'");
	$teamid=0;
	$k2=mysql_fetch_array($k1);
	$teamid=$k2[0];
	$teamid++;
	$cflag=0;
	$mine=mysql_query("SELECT ids FROM teams WHERE eid='$eid'");
	while($p2=mysql_fetch_array($mine))
		{
		$spl=explode("~",$p2['ids']);
		$cflag=0;
		for($k=0;$k<count($spl);$k++)
			{
			for($kt=1;$kt<=$len;$kt++)
				{
				if($spl[$k]==$tids[$k])
					$cflag=1;
				}	
			}
		}
	if($cflag==1){
		$cflag=0;
		echo "<script>alert('One/more are already Registered.....');</script>";
		}
	else
		{
		mysql_query("INSERT INTO teams (`teamid`, `ids`, `eid`,`regdoneby`,`time`, `ip`) VALUES ('$teamid', '$ids','$eid', '$user',NOW(), '$ip')");
		echo "<font color=green>You Are Successfully Registred</font><Br>";
		echo $ids."<Br>";
		echo "Thank You For your Time";
		}
	



}
}
else
{
echo "Not Registered";	
}
}

?>

