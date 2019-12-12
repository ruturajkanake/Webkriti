<!DOCTYPE html>
<html>
<head>
	<title>TECHNOVATION 2k19</title>
  <link rel="icon" href="png1.png">
	<link rel="stylesheet" type="text/css" href="home1.css">

</head>

<body >
<div class="arrow2"></div>
<div class="arrow3"></div>
<div class="arrow1"></div>
<form action="index.php" method="post">
<input type="image" src="png1.png" class="a3" > 
</form>

<div class="img1" id="b1"   >
<img src="qq-home.png" class="i1"  onclick="location.href ='redirect.php';" >
<img src="pl-about.png" class="i1"  onclick="location.href ='about.php';">
<img src="qq-events.png" onclick="location.href ='event.php';" class="i1" >
<img src="pl-login.png" class="i1" onclick="fx4()" >
<img src="qq-register.png" class="i1" onclick="location.href ='Register.php';" >
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
<li class="i7" onclick="fx4()">Login</li>
<br>
<li class="i7" onclick="location.href ='Register.php';">Register</li>	
</ul>
</div>

</div>

<div class="e1" >
  <img class="mySlides" src="name2.png" >
  <img class="mySlides" src="name3.png" >
  <img class="mySlides" src="name4.png" >
</div>

<div class="e2" >
  <img class="mySlides1"  src="knight1.png" >
  <img class="mySlides1"  src="knight3.png" >
  <img class="mySlides1"  src="knight4.png" >
</div>

<div class="a4">

<a href="https://www.facebook.com/"><img src="facebook.png" class="a5"></a>
<a href="https://www.instagram.com/"><img src="instagram.png" class="a5"></a>
<a href="https://www.twitter.com/"><img src="twitter.png" class="a5"></a>
<a href="https://www.whatsapp.com/"><img src="whatsapp.png" class="a5"></a>
<a href="https://www.linkedin.com/"><img src="linkedin.png" class="a5"></a>


</div>


<div id="myModal" class="modal">
<div class="modal-content">
<span onclick="fx5()" class="close">&times;</span>
<div class="pop1"><h1>Login</h1></div>
<form action="index.php" method="post">
<div class="log">
Username &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="u1" placeholder="Enter Username" size="15" ><br>
Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="Password" name="p1" placeholder="Enter Password" size="15" >
<br><br>
Not Registered? <a href="Register.php">Click Here </a>&emsp;&emsp;
<input type="submit" value="Submit" name="sub1">

</div>
</form>
</div>
</div>


<img onclick="fx7()" src="notifications.png" class="n1"  >
<div id="myModal1" class="modal1">


<div class="modal-content1">
<span onclick="fx8()" class="close">&times;</span>
<div class="pop1"><h1>Notifications</h1></div>
<div class="pop2">
<ul>
<li>Technovation is annual Techno-Managerial fest going to be held on 1-3 March 2019</li>
<li>The deadline for the applications for participating in various events is 28 Feb 2019</li>
</ul>
</div>
</div>
</div>
<script type="text/javascript" src="home.js"></script>
</body>
</html>



<?php


session_start();

$_SESSION['log']="N";
$_SESSION['u1']="";

if(isset($_POST["sub1"])){

 $Name=$_POST['u1'];
 $Pwd=$_POST['p1'];




 if( !empty($Name) && !empty($Pwd)   ){


 $conn = new mysqli('127.0.0.1','root','','Webkriti');
 
 if(!$conn){
  
echo "<script type='text/javascript'>alert('Connection failed')</script>";
	die();
}
 
$sql="SELECT * FROM info WHERE UNAME='$Name' AND PWD='$Pwd'";
$result=mysqli_query($conn, $sql);

 if(mysqli_num_rows($result)==0)
   {
    echo "<script type='text/javascript'>
 alert('Username/Password incorrect')
 </script>";
     die();

   }
else{

$_SESSION['log']="Y";
$_SESSION['u1']=$Name;
echo "<script type='text/javascript'>

 alert('Login Sucessfull')


</script>";
header("Location:home2.php");

  
} 

}


 else
 {
 echo "<script type='text/javascript'>
 alert('Please fill out all the fields')
 'window.location.href(home2.php)';
 </script>";
die();

}

}

?>