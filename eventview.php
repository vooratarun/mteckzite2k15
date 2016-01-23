<?php
session_start();
include "connect.php";
if((isset($_REQUEST['ev']) && isset($_REQUEST['br'])))
{
$ev=@$_REQUEST['ev'];
$br=@$_REQUEST['br'];
$q1=mysql_query("SELECT * FROM events WHERE category='$br' and ename='$ev'") or die(mysql_error());
$row=mysql_fetch_array($q1);
$max=$row['teams'];
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
<?php
$file="";
if($row['category']=="MME")
	$file="me.php";
else if($row['category']=="OPEN2ALL")
	$file="open.php";
else if ($row['category']=="ROBOTICS")
	$file="robo.php";
else if ($row['category']=="CE")
	$file="civil.php";
else
	$file=strtolower($row['category']).".php";
?>
<span class="but"><a href="<?php echo $file;?>"><?php echo $row['category'];?></a></span>
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


<img src="images/tr.png" class="vt" alt=""/> <?php echo $row['category'];?>&nbsp;/ <?php echo $row['etitle'];?>




</div>





<div class="vib">
<br/>
<div id="eid">	
<style>
li{

list-style-type:none;
}
</style>


<?php
include "connect.php";
?>
<center>
<h3><?php echo $row['etitle'];?></h3>
<a href="eventreg.php?br=<?php echo $br;?>&ev=<?php echo $ev;?>"><img src="img/reg.png" style='margin-left:10px;'>


</center>
<table border="0" cellspacing="5px;" style="margin-left:10px;">
<tr>
<td>

	<div style="width:50px;height:50px;border:1px solid;border-radius:100px;color:white;cursor:pointer;"  >
	<a href="eventview.php?ev=<?php echo $row['ename'];?>&br=<?php echo $row['category'];?>">
<img src="evimages/<?php echo $row['category'];?>/<?php echo $row['ename'];?>.png" style="width:50px;height:50px;border-radius:100px">
</a>

</div>
</td>

<td>
<font size=1>
<?php echo $row['description'];?>
</font>
</td>
</tr>
</table>
<hr color="gray" size=1>
<div style="margin-left:10px;">
<font color="#970DEF" size="3px" style="font-weight:bold;">Instructions:</font><br>

<?php
echo $row['instructions'];
?>

</div>
<hr color="gray" size=1>
<div  style="margin-left:10px;">
<font color="#339429" size="3px" style="font-weight:bold;">Organizors:</font><br>
<?php
echo $row['organizers'];
?>
</div>
<hr color="gray" size=1>
<div  style="margin-left:10px;">
<font color="#800080" size="3px" style="font-weight:bold;">Schedule:</font><br>
<?php
echo $row['schedule'];
?>
</div>
<hr color="gray" size=1>
<div  style="margin-left:10px;">
<font color="#EA1217" size="3px" style="font-weight:bold;">Winners:</font><br>
<?php
echo $row['winners'];
?>
</div>
<hr color="gray" size=1>

<br/>
<br/>


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
<?php
}
else 
	echo "Well Try Jaffa";
?>
