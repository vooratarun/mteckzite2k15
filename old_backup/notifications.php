<?php
session_start();
include "connect.php";
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">

<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link rel="shortcut icon" type="image/x-icon" href="gani.ico"/>
<meta http-equiv="Content-Type" content="application/vnd.wap.php+xml; charset=UTF-8"/>
<title>Teckzite 2k15</title>
</head>

<body>




<div class="header"><img src="images/logo.png" alt="" height="50px"/> 
<img src="images/rgukt.png" height="25px;" style="margin-top:0px;margin-left:65%;"/>
</div>





<div class="teg">
<img src="images/v.png" class="vt" alt=""/>
<span class="but"><a href="index.php">Home</a></span>
&nbsp;<font color="white">/</font>
<span class="but"><a href="notifications.php">Notifications</a></span>


</div>




<div class="new">


<center>
 Teckzite 2K15 starts From<br/>
29-3-2015 and 30-3-2015<br/>
</center>




</div>






<div class="ot4">


<img src="images/tr.png" class="vt" alt=""/> Updates




</div>





<div class="vib">
<br/>
<center><font style="color:black;font-size:17px;font-family:veradana;">&nbsp;&nbsp;&nbsp;UPDATES</font></center>
<div style="margin-left:30px;width:90%;">
<?php
$i=1;
$q1=mysql_query("SELECT * FROM notifications ORDER BY nid DESC LIMIT 10") or die(mysql_error());
while($row=mysql_fetch_array($q1))
{
?>
<div style="background-color:;">
<?php echo $i.".";?><a href="" style="font-weight:bold;color:#970DEF;font-size:15px;" >&nbsp;<?php echo $row['title'];?> :
<?php
if($i==1)
	echo "<img src='images/new-con.gif' style='margin-left:0px;'>"
?>
</a><br/>
<font style="margin-left:50px;color:black;"><?php echo $row['content'];?></font><br>
<?php
if($row['file']!="nofiles")
	echo "<a style='margin-left:100px;' href='".$row['file']."'>Download</a><Br>";
echo "<font color=grey>Date :</font> ".$row['posted_date']."  &nbsp;<font color=grey>Time</font> :".$row['time']."</div><br>";
	
?>
<?php
$i++;
echo "";
}
?>

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


<img src="images/or.png" class="vt" alt=""/> SDCAC WebTeam 


</div>






</body>

</html>
