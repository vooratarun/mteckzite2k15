<?php
session_start();
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
<span class="but"><a href="webteam.php">Webteam</a></span>
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



<img src="images/or.png" class="vt" alt=""/> <a href="webteam.php" style="color:white;">SDCAC WebTeam</a> 



</div>





<div class="vib">





<?php
include "connect.php";
?>
<center>
</center>
<center><h3 style="font-family:algerian;"><BR>Webteam</h3></center>
<table border="0" cellspacing="5px;" cellpadding="20px" style="margin-left:2px;">
<tr>
<td>

	<div style="width:100px;height:100px;border:1px solid;border-radius:100px;color:white;cursor:pointer;"  >
	
<img src="webteam/ganesh.jpg" style="width:100px;height:100px;border-radius:100px">

&nbsp;&nbsp;&nbsp;&nbsp;<FONT COLOR="BLACK" STYLE="FONT-SIZE:13px;padding-top:20px;font-weight:bold;">K.Ganesh<br>
&nbsp;&nbsp;&nbsp;&nbsp;N100704</FONT>


</div>

</td>

<td>
<div style="width:100px;height:100px;border:1px solid;border-radius:100px;color:white;cursor:pointer;"  >
	
<img src="webteam/pratap.jpg" style="width:100px;height:100px;border-radius:100px">
<FONT COLOR="BLACK" STYLE="FONT-SIZE:13px;padding-top:20px;font-weight:bold;">P.Prathap<br>N130950</FONT>

</div>
</td>
<td>
<div style="width:100px;height:100px;border:1px solid;border-radius:100px;color:white;cursor:pointer;"  >
	
<img src="webteam/N110888k.jpg" style="width:100px;height:100px;border-radius:100px">
<FONT COLOR="BLACK" STYLE="FONT-SIZE:13px;padding-top:20px;font-weight:bold;">M.Raja Sekhar<BR>
N110888</FONT>


</div>
</td>
</tr>
<tr>
<td>

</td>
</tr>
</table>




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
