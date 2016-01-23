<?php
session_start();
include "connect.php";
if((isset($_REQUEST['ev']) && isset($_REQUEST['br'])) || isset($_REQUEST['regsubmit']))
{
$ev=@$_REQUEST['ev'];
$br=@$_REQUEST['br'];
$q1=mysql_query("SELECT * FROM events WHERE category='$br' and ename='$ev'") or die(mysql_error());
$row=mysql_fetch_array($q1);
$max=$row['teams'];
$eid=$row['eid'];
?>

<head>


<link rel="stylesheet" type="text/css" href="style.css"/>
<script href="mteckzite.js"></script>
<script src="jq.js"></script>
<script>
function regval(max,eid)
{
var i;
var flag=0;
var tids=""
for(i=1;i<=max;i++)
	{
	tmp=document.getElementById("id"+i).value;
	if(tmp==false)
		flag=1;
	else{
		if(i==max)
			tids=tids+tmp;
		else
			tids=tids+tmp+"~";
		}
	
	}
if(flag==1)
{
	document.getElementById('regerror').innerHTML="Enter all TZIDs";
	return false;
	}
else
	{
	$.post("regtoevent.php?eid="+eid+"&ids="+tids+"&len="+max,function(regggdata){
	$("#regerror").html(regggdata);
	});
	
	return false;
	
	}
return false;
}

</script>

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

<?php
$i=1;
ECHO "<FONT SIZE=2>REGISTRATION PROCESS</FONT>";
echo "<hr>";
echo "<div id='regerror' style='color:red;'></div>";
if(isset($_SESSION['mobileuser']))
{
echo "<form method=post action='mainreg.php' onsubmit=\"return regval('".$max."','".$eid."')\">";
echo "<input type='hidden' name='maxteam' value='".$max."'>";
echo "<h3></h3>";
echo "<table>";
for($i=1;$i<=$max;$i++)
	{
	echo "<tr><td>TZID ".$i."</td><td><input type='text' name='id".$i."' id='id".$i."'></td></tr>";
	}
echo "</table>";
echo "<input type='submit' name='regsubmit' value='Register' style='background-color:#4D7198;color:white;border-radius:10px;height:27px;width:120px;'>";
echo "<hr>";
echo "</form>";
}
else
	echo "<br><Br><Br><center><font color=red>Please Login</font></center><br><Br>";
?>



</center>


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
<?php
if(isset($_POST['regsubmit']))
{
	echo "Hello World";
}

?>

