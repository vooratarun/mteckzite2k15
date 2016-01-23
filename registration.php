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
function calfees(key)
{
if(key=="yes")
	document.getElementById("shwamount").innerHTML="I agree to Pay 200/- for Participation and Accomdation.<br>";
else
	document.getElementById("shwamount").innerHTML="I agree to Pay 200/- for Participation. <br>";

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
&nbsp;<font color="white">/</font>
<span class="but"><a href="registration.php">Registration</a></span>
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


<img src="images/tr.png" class="vt" alt=""/> Registration




</div>





<div class="vib">
<div>
<?php
if(isset($_POST['regsub']))
{
$fname=strip_tags(htmlspecialchars($_POST['fname']));
	$lname=strip_tags(htmlspecialchars($_POST['lname']));
	$phone=strip_tags(htmlspecialchars($_POST['phone']));
	$email=strip_tags(htmlspecialchars($_POST['email']));
	$gender=strip_tags(htmlspecialchars($_POST['gender']));
	$department=strip_tags(htmlspecialchars($_POST['department']));
	$year=strip_tags(htmlspecialchars($_POST['year']));
	$college=strip_tags(htmlspecialchars($_POST['college']));
	$passwd=strip_tags(htmlspecialchars($_POST['pwd']));
	$cpasswd=strip_tags(htmlspecialchars($_POST['cpwd']));
	if($passwd!=$cpasswd)
		echo "<center><font color=red>Password and Confirm Password should be same.</font></center>";
	else
	{
	$accomodation=strip_tags(htmlspecialchars($_POST['accomodation']));
	
	//fees calculation
	if($accomodation=="yes")
	{
	$fees="500";
	$accomodation="YES";
	}
	if($accomodation=="no")
	{
	$fees="200";
	$accomodation="NO";
	}
	
	$ip=$_SERVER['REMOTE_ADDR'];
	
	//check if registered with same mobile and email
	
	$ifreg = mysql_query("select * from `registration` where `email` = '".mysql_real_escape_string($email)."' && `phno` = '".mysql_real_escape_string($phone)."'");
	if(mysql_num_rows($ifreg)>0)
	{
		echo "<center><font color=red>Already Registered</font></center>";
    }
    //registering
     else
     {
		 //getting recent tzid
	$lastzid = mysql_query("select * from `registration` ORDER BY sno DESC LIMIT 1 ");
	if(mysql_num_rows($lastzid)<1)
	{
		//new teckziteid
		$curtzid="TZ10001";
		 if(mysql_query("INSERT INTO `registration`(tzid,passwd,firstname,lastname,gender,batch,branch,phno,email,college,hostel,reg_fee) VALUES('$curtzid','$passwd','$fname','$lname','$gender','$year','$department','$phone','$email','$college','$accomodation','$fees')") or die(mysql_error()))
	 {
		  if(mysql_query("INSERT INTO `fees`(tzid,amount,IP) VALUES('$curtzid','$fees','$ip')") or die(mysql_error()))
	 {
		
		  echo $curtzid;
	  }
	 }
	
	}
	else
	{
		while($det=mysql_fetch_array($lastzid))
		{
			$tzzid=$det['tzid'];
		}
		//getting last four numbers
		$tzzid=substr($tzzid, 2, 6);
		//assigning new id
	 $curtzid=$tzzid+1;
	 
	 //new teckziteid
	 $curtzid="TZ".$curtzid;
 if(mysql_query("INSERT INTO `registration`(tzid,passwd,firstname,lastname,gender,batch,branch,phno,email,college,hostel,reg_fee) VALUES('$curtzid','$passwd','$fname','$lname','$gender','$year','$department','$phone','$email','$college','$accomodation','$fees')") or die(mysql_error()))
	 {
		  if(mysql_query("INSERT INTO `fees`(tzid,amount,IP) VALUES('$curtzid','$fees','$ip')") or die(mysql_error()))
	 {
echo "<hr>";
 echo "<center><font color=green>Your are Successfully Registerd</font></center><Br>";          
 echo  "<center><font color=black>Your Teckzite Id&nbsp;&nbsp;</font><font color=blue style='border:1px solid;'>&nbsp;&nbsp;".$curtzid."&nbsp;&nbsp;</font>";
 echo "<hr>";
 echo "<script>window.scroll(0,0);document.getElementById('ganiform1').innerHTML=''document.getElementById('ganiform2').innerHTML='';</script>";
 

    $name = @trim(stripslashes($fname)); 
    $email = @trim(stripslashes($email)); 
    $subject = @trim(stripslashes("Teckzite2K15 Registration Details")); 
    $message = @trim(stripslashes("Thank You For Registering to Teckzite2K15")); 

    $email_from = 'admin@teckzite.in';
    $email_to = $email;//replace with your email
$subject = 'Teckzite2K15 Registration Details';

// message
$message = '
<!DOCTYPE html>
<html>

<head>
</head>

<body>

<div style="background-color: #A7C942; color:white; text-align:center; padding:5px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;">
<h1>Teckzite 2K15</h1>
</div>


<div style="width:650px;float:left;padding:10px;">
<h2>Registration Details of '.$fname.' '.$lname.'</h2>
<p>
<b>Hi '.$fname.' '.$lname.',</b><br>
You are Successfully Registered to Teckzite2K15.
</p>
<br>
<table style=" font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;width: 100%;border-collapse: collapse;">
  <tr>
    <th colspan="2" style=" font-size: 1.1em;text-align: left;padding-top: 5px;padding-bottom: 4px;background-color: #A7C942;color: #ffffff; font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Details of '.$fname.' '.$lname.'</th>
  </tr>
  <tr >
    <td style="font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Teckzite ID</td>
    <td  style="font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">'.$curtzid.'</td>
 
  </tr>
<tr>
 <tr >
    <td  style="color: #000000;background-color: #EAF2D3;font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Name</td>
    <td  style="color: #000000;background-color: #EAF2D3;font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">'.$fname.' '.$lname.'</td>
 
  </tr>
<tr >
    <td  style="font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Fee</td>
    <td  style="font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">'.$fees.'</td>
 
  </tr>

 <tr >
    <td  style="color: #000000;background-color: #EAF2D3;font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">Phone</td>
    <td  style="color: #000000;background-color: #EAF2D3;font-size: 1em;border: 1px solid #98bf21;padding: 3px 7px 2px 7px;">'.$phone.' </td>
 
  </tr>
</table>
<br>
<b>Please Complete Payment Process at <a href="http://thecollegefever.com/teckzite">http://thecollegefever.com/teckzite</a> for the Completion of Registration Process
</div>

<div style="  background-color: #A7C942;color:white;clear:both;text-align:center;padding:5px;">
Copyright © <a href="http://www.teckzite.in" target="_blank" style="text-decoration:underline;color:white;">Teckzite2K15</a>
</div>

</body>
</html>

';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To:'.$fname.''. $lname.'' . "\r\n";
$headers .= 'From: Teckzite2K15 admin <admin@teckzite.in>' . "\r\n";

// Mail it
mail($email_to, $subject, $message, $headers);


	  }
	 }
	
}
		 
	 }
}
}
?>
</div>

<center><font style="color:black;font-size:20px;font-family:veradana;" id="ganiform1">&nbsp;&nbsp;&nbsp;Registration Form</font></center>
<form  method="post" id="registration" style="color:black;margin-left:150px;" id="ganiform2"> 
    			<p class="contact"><label for="name">First Name</label></p> 
    			<input id="fname"  name="fname" placeholder="First Name" required  type="text"> 
    			 
    			<p class="contact"><label for="name">Last Name</label></p> 
    			<input id="lname" name="lname" placeholder="Last Name" required type="text"> 
                
                
        
  
            <p class="contact"><label for="phone">Mobile No</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required type="text"> <br>
            
            
            <p class="contact"><label for="email">Email</label></p> 
            <input id="email" name="email" placeholder="Email Address" onblur="mailcheck(this.value)" required type="email"> <br>
            
               <p class="contact"><label for="gender">Gender</label></p>
             <input type="radio" name="gender" value="M" id="gender"> Male &nbsp;&nbsp;&nbsp;
             <input type="radio" name="gender" value="F"> Female
             <br><br>
            
            
               <p class="contact"><label for="department">Department</label></p>
  
            <select class="select-style gender" id="department" name="department">
            <option value="">Select</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
            <option value="CE">CIVIL</option>
            <option value="MECH">MECHANICAL</option>
            <option value="CHE">CHEMICAL</option>
            <option value="MME">METTULARGY</option>
            </select><br><br>
            
                <p class="contact"><label for="year">Year</label></p>
  
            <select class="select-style gender" id="year" name="year">
            <option value="">Select</option>
            <option value="E1">ENGG1</option>
            <option value="E2">ENGG2</option>
            <option value="E3">ENGG3</option>
            <option value="E4">ENGG4</option>
            </select><br><br>
            
            
            <p class="contact"><label for="college">College</label></p> 
            <input id="college" placeholder="College Name" required type="text" name="college"> <br>
            
            
            <p class="contact"><label for="password">Password</label></p> 
            <input id="passwd" placeholder="Password" required type="password" name='pwd'> <br>
            
                <p class="contact"><label for="password">Confirm Password</label></p> 
            <input id="cnfrmpasswd" placeholder="Confirm Password" required type="password" name='cpwd'> <br>
            
             <p class="contact"><label for="accomodation">Do you want Accomodation?</label></p>
             <input type="radio" name="accomodation" value="yes" onchange="calfees('yes')"> Yes &nbsp;&nbsp;&nbsp;
             <input type="radio" name="accomodation" value="no" onchange="calfees('no')"> No
             <br><br>
             <span class="successinfo" id="shwamount" style="color:green;">
            </span>
			<br>
    <input type="submit" name="regsub" value="Submit" style="border:1px;border-radius:10px;height:23px;background-color:#4D7198;color:white;"> <br>
        <br>	 
   </form> 

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
