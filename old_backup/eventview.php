<?php
include "connect.php";
$ev=$_REQUEST['ev'];
$br=$_REQUEST['br'];
$q1=mysql_query("SELECT * FROM events WHERE category='$br' and ename='$ev'") or die(mysql_error());
$row=mysql_fetch_array($q1);
?>
<?xml version="1.0" encoding="utf-8"?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru">

<head>
<script href="jq.js"></script>
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



<?php
include "connect.php";
?>
<center>
<h3><?php echo $row['etitle'];?></h3>
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
<?php echo $row['description'];?>
</td>
</tr>
</table>

<div style="margin-left:10px;">
<font color="#970DEF" size="3px" style="font-weight:bold;">Instructions:</font><br>

<?php
echo $row['instructions'];
?>

</div>
<div  style="margin-left:10px;">
<font color="#339429" size="3px" style="font-weight:bold;">Organizors:</font><br>
<?php
echo $row['organizers'];
?>
</div>
<div  style="margin-left:10px;">
<font color="#800080" size="3px" style="font-weight:bold;">Schedule:</font><br>
<?php
echo $row['schedule'];
?>
</div>
<div  style="margin-left:10px;">
<font color="#EA1217" size="3px" style="font-weight:bold;">Winners:</font><br>
<?php
echo $row['winners'];
?>
</div>

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


<img src="images/or.png" class="vt" alt=""/> SDCAC WebTeam 


</div>






</body>

</html>
