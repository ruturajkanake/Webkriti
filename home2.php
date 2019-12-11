<?php
session_start();

if($_SESSION['log']=="N")
header("Location:home1.php");

?>


<!DOCTYPE html>
<html>
<head>
  <title>TECHNOVATION 2k19</title>
  <link rel="icon" href="png1.png">
  <link rel="stylesheet" type="text/css" href="home2.css">

</head>

<body >
<div class="arrow2"></div>
<div class="arrow3"></div>
<div class="arrow1"></div>
<form action="redirect.php" method="post">
<input type="image" src="png1.png" class="a3" name=logo> 
</form>


<div class="img2" id="b2">
<img src="pl-home.png" class="i2"    onclick="location.href ='redirect.php';" >
<img src="qq-about.png" class="i2"  onclick="location.href ='about.php';" >
<img src="pl-events.png" class="i2"   onclick="location.href ='event.php';" >
<img src="pl-profile.png" class="i2"  onclick="location.href ='profile.php';" >
<img src="qq-logout.png" class="i2" onclick="location.href ='d.php';"  >
</div>


<div class="i3" id="a3">
<img src="scroll2.png" onclick="fx2()" class="i33" id="a33">
<img src="scroll1.png" onclick="fx3()" class="i44" id="a44">
<ul id="55" class="i6">
<li class="i7" onclick="location.href ='redirect.php';">Home</li>
<br>
<li class="i7" onclick="location.href ='about.php';">About</li>
<br>
<li class="i7" onclick="location.href ='event.php';">Events</li>
<br>
<li class="i7" onclick="location.href ='profile.php';">Profile</li>
<br>
<li class="i7" onclick="location.href ='d.php';" >Logout</li> 
</ul>
</div>

</div>

<div class="e1" >
  <img class="mySlides" src="name2.png" >
  <img class="mySlides" src="name3.png" >
  <img class="mySlides" src="name4.png" >
</div>

<div class="e2" >
  <img class="mySlides1" src="knight1.png" >
  <img class="mySlides1" src="knight3.png" >
  <img class="mySlides1" src="knight4.png" >
  
</div>

<div class="a4">

<a href="https://www.facebook.com/"><img src="facebook.png" class="a5"></a>
<a href="https://www.instagram.com/"><img src="instagram.png" class="a5"></a>
<a href="https://www.twitter.com/"><img src="twitter.png" class="a5"></a>
<a href="https://www.whatsapp.com/"><img src="whatsapp.png" class="a5"></a>
<a href="https://www.linkedin.com/"><img src="linkedin.png" class="a5"></a>


</div>



<img onclick="fx7()" src="notifications.png" class="n2"  >
<div  id="myModal2" class="modal2">


<div class="modal-content2">
<span onclick="fx8()" class="close2">&times;</span>
<div class="pop11"><h1>Notifications</h1></div>
<div class="pop22">
<ul>
<li>Technovation is annual Techno-Managerial fest going to be held on 1-3 March 2019</li>
<li>The deadline for the applications for participating in various events is 28 Feb 2019</li>
</ul>
</div>
</div>
</div>
<script type="text/javascript" src="home2.js"></script>
</body>
</html>

