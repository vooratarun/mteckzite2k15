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
&nbsp;<font color="white">/</font>
<span class="but"><a href="contact.php">Contact</a></span>
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
<br/>
<center style="color:black;font-size:20px;">Contact Us</center>
<br/>
<table style="margin-left:20px;color:black;" cellspacing="3px" cellpadding="5px">
<tr>
<td>
For any Technical issues Contact us at 
</td><td style="color:blue;">
admin@teckzite.in
</td>
</tr>
<tr>
<td>
For any Hospitality issues Contact us at  
</td><td style="color:blue;">
 support@teckzite.in
 </td>
</tr>
<tr>
<td>
For Branch Queries
</td>
</tr>
<tr>
<td>
For Chemical Branch  
</td><td style="color:blue;">
 chemical@teckzite.in
</td>
</tr>
 <tr>
<td>
For Civil Branch   
</td><td style="color:blue;">
civil@teckzite.in
</td>
</tr>
<tr>
<td>
For CSE Branch   
</td><td style="color:blue;">
cse@teckzite.in
</td>
</tr>
<tr>
<td>
For ECE Branch 
</td><td style="color:blue;">
  ece@teckzite.in
</td>
</tr>
  <tr>
<td>
For Mechanical Branch  
</td><td style="color:blue;">
 mechanical@teckzite.in
</td>
</tr>
 <tr>
<td>
For Metallurgy Branch  
</td><td style="color:blue;">
 mme@teckzite.in
</td>
</tr>
 <tr>
<td>
For Robotics Branch  
</td><td style="color:blue;">
 robotics@teckzite.in 
</td>
</tr> 

 </table>
 <br/>

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
