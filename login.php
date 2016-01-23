<?php
session_start();
include "connect.php";
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="gani.ico"/>
<meta http-equiv="Content-Type" content="application/vnd.wap.php+xml; charset=UTF-8"/>
<title>Teckzite 2k15</title>

<script>
function loadthis()
{
document.getElementById('maindiv').innerHTML="<img src='img/inst.png' width='95%' height=24%>";
}
</script>
</head>

<body>




<div class="header"><img src="images/logo.png" alt="" height="50px"/> 
<img src="images/rgukt.png" height="25px;" style="margin-top:0px;margin-left:65%;"/>
</div>





<div class="teg">
<img src="images/v.png" class="vt" alt=""/>
<span class="but"><a href="index.php">Home</a></span>


<?php
if(isset($_SESSION['mobileuser']))
	echo "<a href='logout.php' '><span class='but' style='margin-left:20%;color:white;'> Logout<font style='color:white;'> <b>".$_SESSION['mobileuser']."</font></b></a></span>";
else
	{
?>
&nbsp;<font color="white">/</font>
<span class="but"><a href="login.php">Login</a></span>
<?php
}
?>
</div>




<div class="new">


<center>
 Teckzite 2K15 starts From<br/>
29-3-2015 and 30-3-2015<br/>
</center>




</div>






<div class="ot4">


<img src="images/tr.png" class="vt" alt=""/> 
<?php
if(isset($_SESSION['mobileuser']))
	{
	echo "Welcome ".$_SESSION['mobileuser'];
	}
else
{
echo "Login";
}
?>





</div>





<div class="vib">
<form method="post" action="login.php">
<?php
if(isset($_POST['sub']))
{
$uname=strip_tags(htmlspecialchars(addslashes(strtoupper($_POST['uname']))));
$pwd=strip_tags(htmlspecialchars(addslashes(strtoupper($_POST['pwd']))));
if($uname==false || $pwd==false)
	echo "<center><font color=red><b>* Fill Required Fields</b></font></center>";
else
	{
	$q=mysql_query("SELECT gender,firstname,tzid FROM registration WHERE tzid='$uname' and passwd='$pwd'") or die(mysql_error());
	if(mysql_num_rows($q)>0)
		{
		$row=mysql_fetch_array($q) or die(mysql_error());
		echo "<center><font color=red><b><font color=black>WELCOME </font>".$row['firstname']."</b></font></center>";
		$_SESSION['mobileuser']=$row['firstname'];
		$_SESSION['mobileuserid']=$row['tzid'];
		}
	} 
}

?>
<?php
if(!isset($_SESSION['mobileuser']))
{
?>
<center><font style="color:black;font-weight:bold;color:#4D7198;font-size:20px;font-family:times;">&nbsp;&nbsp;&nbsp;Login Form</font>
<table>
<tr>
	<td style="color:#4D7198;">Username</td><td><input type="text" name="uname" id="uname"></td>
</tr>
<tr>
	<td style="color:#4D7198;">Password</td><td><input type="password" name="pwd" id="pwd"></td>
</tr>
<tr>
	<td colspan=2><center>&nbsp;<input type="submit" name="sub" value="Login" style="border:1px;border-radius:10px;height:23px;background-color:#4D7198;color:white;">&nbsp;<input style="border:1px;border-radius:10px;height:23px;background-color:#4D7198;color:white;" type="reset" value="Reset"></td>
</tr>
</table>
</center>
</form>
<?php
}
else
{

echo "<center><a href='http://thecollegefever.com/teckzite' target='_blank'><img src='img/pay.png' style=''></a><img src='img/instr.png' style='border-radius:150px;cursor:pointer;' onclick='loadthis()'></center>";

echo "<center><div id='maindiv' style='border:1px solid;width:90%;'>";
$name=$_SESSION['mobileuser'];
$q3=mysql_query("SELECT admin,tzid FROM fees WHERE tzid='$name'") or die(mysql_error());
$krow=mysql_fetch_array($q3);
$paid="";
if($krow['admin']!="paid")
	{
	$paid="Not Paid";
	}
else
	$paid="Paid";
echo "<table border='0' cellpadding=7px>
<tr><td>
<font size=3>Teckziteuser</font>
</td>
<td>
".$_SESSION['mobileuserid']."
</td>
</tr>
<tr>
<td>
<font size=3>Money</font>
</td>
<Td>
<font color=red>".$paid."</font>
</td>
</tr>


<tr>
<td>
</td>
<Td>
</td>
</tr>
</table>";





echo "
</div></center>";
echo "<br><center><font color=red><blink>* Change Password and Profile Editing Available only in Full Site for Security Purpose</blink></font></center>";
}
?>
</div>





<div class="vib">


</div>


<div class="vib2">


</div>


<div class="vib">


</div>


<div class="vib2">


</div>




<div class="ot4">


<img src="images/tr.png" class="vt" alt=""/> Follow Us On




</div>





<div class="tegt">
 <center>
<a href="https://www.facebook.com/teckzite" target="_blank"><img src="images/facebook.png" class="vt" alt="" height="30px" style="background:trasperant;"/> </a>
  <a href="https://twitter.com/teckzite2k15" target="_blank">  <img src="images/twitter.png" class="vt" alt="" height="30px"/>  </a> 
    <a href="#" target="_blank">  <img src="images/g+.png" class="vt" alt="" height="30px"/>  </a> <br/>
</center>
<img src="images/rekl.png" class="vt" alt=""/><a href="http://www.teckzite.in"> Full Site </a>   <br/> 

</div>









<div class="or">



<img src="images/or.png" class="vt" alt=""/> <a href="webteam.php" style="color:white;">SDCAC WebTeam</a> 


</div>






</body>

</html>
