<?php
session_start();
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="gani.ico"/>

<title>Teckzite 2k15</title>
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
<span class="but" style='margin-left:20%;color:white;'><a href="login.php">Login</a></span>
<?php } ?>
</div>




<div class="new">


<center>
 Teckzite 2K15 starts From<br/>
29-3-2015 and 30-3-2015<br/>
</center>




</div>






<div class="ot4">


<img src="images/tr.png" class="vt" alt=""/> Menu




</div>



<div class="vib">

</div>

<div class="vib">

<img src="images/ik1.png" class="vt" alt=""/> <a href="index.php"> Home  </a>

</div>



<div class="vib2">

<img src="images/ik2.png" class="vt" alt=""/> <a href="events.php"> Events </a>

</div>


<div class="vib">

<img src="images/ik3.png" class="vt" alt=""/> <a href="notifications.php"> Updates 
<?php

include "connect.php"; 
$go=mysql_query("SELECT * FROM notifications WHERE posted_date=CURDATE()");
$go2=mysql_num_rows($go);
if($go2>0){
?>
<sup><font color=red 
style="font-size:13px;background-color:red;color:white;border:1px solid;width:100px;border-radius:50px;">&nbsp;
<?php
	echo $go2;
	}

?>

&nbsp;</font></sup> </a>

</div>


<div class="vib2">

<img src="images/ik4.png" class="vt" alt=""/> <a href="contact.php"> Conact Us </a>

</div>


<?php
if(!isset($_SESSION['mobileuser']))
{
?>
<div class="vib">

<img src="images/ik5.png" class="vt" alt=""/> <a href="registration.php">Registration  </a>

</div>
<?php
}
else
	{
	// Do nothing
	}
?>



<div class="vib2">
<?php
if(!isset($_SESSION['mobileuser']))
{
?>
<img src="images/ik6.png" class="vt" alt=""/> <a href="login.php"> Login </a>
<?php
}
else
	{
	?>
	<img src="images/ik6.png" class="vt" alt=""/> <a href="login.php"> Profile</a>
	<?php
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
