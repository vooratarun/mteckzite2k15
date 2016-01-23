<?php
session_start();
include "connect.php";
?>

<head>

<link rel="stylesheet" type="text/css" href="style.css"/>
<script href="mteckzite.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="gani.ico"/>
<meta http-equiv="Content-Type" content="application/vnd.wap.php+xml; charset=UTF-8"/>
<title>Teckzite 2k15</title>


</head>

<body>

<div id="google">


<div class="header"><img src="images/logo.png" alt="" height="50px"/> 
<img src="images/rgukt.png" height="25px;" style="margin-top:0px;margin-left:65%;"/>
</div>





<div class="teg">
<img src="images/v.png" class="vt" alt=""/>
<span class="but"><a href="index.php">Home</a></span>
&nbsp;<font color="white">/</font>
<span class="but"><a href="events.php">Events</a></span>
&nbsp;<font color="white">/</font>
<span class="but"><a href="chem.php">Chemical</a></span>
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


<img src="images/tr.png" class="vt" alt=""/> Chemical Events




</div>





<div class="vib">
<br/>
<div id="eid">	
<center>
<h3>CHEM Events</h3>

<?php
include "connect.php";
?>
<table border="0" cellspacing="5px;">
<tr>
<td>
<?php

$q1=mysql_query("SELECT * FROM events WHERE category='CHEM'");
$i=1;
while($row=mysql_fetch_array($q1))
{
if($i%3!=0)
	{
	?>
	<div style="width:50px;height:50px;border:1px solid;border-radius:100px;color:white;cursor:pointer;"  >
	<a href="eventview.php?ev=<?php echo $row['ename'];?>&br=<?php echo $row['category'];?>">
<img src="evimages/CHEM/<?php echo $row['ename'];?>.png" style="width:50px;height:50px;border-radius:100px">
</a>

</div>
<?php
echo "<font size='1' style='color:black;'>".$row['etitle']."</font>";
?>
</td>
<td>
	<?php
	}
else
	{
	?>
	</tr><tr><td><div style="width:50px;height:50px;border:1px solid;border-radius:100px;color:white;cursor:pointer;"   >
<a href="eventview.php?ev=<?php echo $row['ename'];?>&br=<?php echo $row['category'];?>">
	<img src="evimages/CHEM/<?php echo $row['ename'];?>.png" style="width:50px;height:50px;border-radius:100px">
</a>
</div>
<?php
echo "<font size='1' style='color:black;'>".$row['etitle']."</font>";
?>

</td>
<td>
	<?php
	}
$i++;
}
?>
</td>
</tr>


</table>

<br/>
<br/>

</center>
</div>

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
