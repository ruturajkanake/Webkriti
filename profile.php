<?php
session_start();

$conn = new mysqli('127.0.0.1','root','','Webkriti');
 
if(!$conn){
echo "<script type='text/javascript'>alert('Connection failed.')</script>";
die();
}

$U=$_SESSION['u1']; 
$sql="SELECT * FROM info WHERE UNAME='$U' ";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$user=$row['UNAME'];
$mob=$row['NUM'];
$n1=$row['NAME'];
$mail=$row['EMAIL'];
/*event*/
$e1r="";
$e1u="Yes";
$e1b="Register";

$sql1="SELECT * FROM event WHERE UNAME='$U' AND ENAME ='E1' ";
$result1=mysqli_query($conn, $sql1);
if(mysqli_num_rows($result1)!=0)
{
$e1u="";
$e1r="Yes";
$e1b="Unregister";
}

/*event*/
$e2r="";
$e2u="Yes";
$e2b="Register";

$sql2="SELECT * FROM event WHERE UNAME='$U' AND ENAME ='E2' ";
$result2=mysqli_query($conn, $sql2);
if(mysqli_num_rows($result2)!=0)
{
$e2u="";
$e2r="Yes";
$e2b="Unregister";
}
/*event*/
$e3r="";
$e3u="Yes";
$e3b="Register";

$sql3="SELECT * FROM event WHERE UNAME='$U' AND ENAME ='E3' ";
$result3=mysqli_query($conn, $sql3);
if(mysqli_num_rows($result3)!=0)
{
$e3u="";
$e3r="Yes";
$e3b="Unregister";
}
/*event*/
$e4r="";
$e4u="Yes";
$e4b="Register";

$sql4="SELECT * FROM event WHERE UNAME='$U' AND ENAME ='E4' ";
$result4=mysqli_query($conn, $sql4);
if(mysqli_num_rows($result4)!=0)
{
$e4u="";
$e4r="Yes";
$e4b="Unregister";
}

if(isset($_POST['b1']))
{

if($e1b=="Register")
{
$sql11="INSERT INTO event values('E1','$U') ";
mysqli_query($conn, $sql11);

echo '<script  type="text/javascript"> 
alert("Registration Sucessfull.");
document.location="profile.php"
</script>';
die();

}
else if($e1b=="Unregister")
{

$sql12="DELETE FROM event WHERE ENAME='E1' AND UNAME='$U' ";
mysqli_query($conn, $sql12);
echo '<script  type="text/javascript"> 
alert("Unregistration Sucessfull.");
document.location="profile.php"
</script>';
die();

}



}

if(isset($_POST['b2']))
{

if($e2b=="Register")
{
$sql21="INSERT INTO event values('E2','$U') ";
mysqli_query($conn, $sql21);

echo '<script  type="text/javascript"> 
alert("Registration Sucessfull.");
document.location="profile.php"
</script>';
die();

}
else if($e2b=="Unregister")
{

$sql22="DELETE FROM event WHERE ENAME='E2' AND UNAME='$U' ";
mysqli_query($conn, $sql22);
echo '<script  type="text/javascript"> 
alert("Unregistration Sucessfull.");
document.location="profile.php"
</script>';
die();

}



}

if(isset($_POST['b3']))
{

if($e3b=="Register")
{
$sql31="INSERT INTO event values('E3','$U') ";
mysqli_query($conn, $sql31);

echo '<script  type="text/javascript"> 
alert("Registration Sucessfull.");
document.location="profile.php"
</script>';
die();

}
else if($e3b=="Unregister")
{

$sql32="DELETE FROM event WHERE ENAME='E3' AND UNAME='$U' ";
mysqli_query($conn, $sql32);
echo '<script  type="text/javascript"> 
alert("Unregistration Sucessfull.");
document.location="profile.php"
</script>';
die();

}



}

if(isset($_POST['b4']))
{

if($e4b=="Register")
{
$sql41="INSERT INTO event values('E4','$U') ";
mysqli_query($conn, $sql41);

echo '<script  type="text/javascript"> 
alert("Registration Sucessfull.");
document.location="profile.php"
</script>';
die();

}
else if($e4b=="Unregister")
{

$sql42="DELETE FROM event WHERE ENAME='E4' AND UNAME='$U' ";
mysqli_query($conn, $sql42);
echo '<script  type="text/javascript"> 
alert("Unregistration Sucessfull.");
document.location="profile.php"
</script>';
die();

}



}
?>


<!DOCTYPE html>
<html>

<head>
	<title>TECHNOVATION 2k19</title>
	<link rel="icon" href="png1.png">
	<link rel="stylesheet" type="text/css" href="profile.css">

</head>
<body>
<form action="redirect.php" method="post">
<input type="image" src="png1.png" class="a3" name=logo> 
</form>
<h1><div class="a1"> Profile </div></h1>
<div class="a2">
	Name : <?php echo $n1 ?> &emsp;&emsp; Username : <?php echo $user ?><br>
	Email : <?php echo $mail ?> &emsp; Mobile No. : <?php echo $mob ?><br><br>
</div>&emsp;on </div>
<div class="e2">Event name &emsp;&emsp; Unregistered &emsp;&emsp; Registered<br></div>
<div class="e3">
	<form action="profile.php" method="post" >
	Code Empire &emsp;&emsp;&emsp;&nbsp;&nbsp; <?php echo $e1u ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; <?php echo $e1r?> &emsp;&emsp;&emsp;&emsp; 
	<input  name="b1"  type="submit" value="<?php echo $e1b?>"><br><br>
	Robo Warrior&emsp;&emsp;&emsp;&nbsp;&nbsp; <?php echo $e2u ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; <?php echo $e2r ?> &emsp;&emsp;&emsp;&emsp;  
	<input name="b2"  type="submit" value="<?php echo $e2b ?>"><br><br>
	Castle Clash &emsp;&emsp;&emsp;&emsp; <?php echo $e3u ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; <?php echo $e3r ?> &emsp;&emsp;&emsp;&emsp; 
	<input  name="b3" type="submit" value="<?php echo $e3b ?>"><br><br>
	Ancient Quiz&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp; <?php echo $e4u ?> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; <?php echo $e4r ?> &emsp;&emsp;&emsp;&emsp; 
	<input  name="b4" type="submit" value="<?php echo $e4b ?>">
</form>
</div>	



<div class="a4">
<a href="https://www.facebook.com/"><img src="facebook.png" class="a5"></a>
<a href="https://www.instagram.com/"><img src="instagram.png" class="a5"></a>
<a href="https://www.twitter.com/"><img src="twitter.png" class="a5"></a>
<a href="https://www.whatsapp.com/"><img src="whatsapp.png" class="a5" ></a>
<a href="https://www.linkedin.com/"><img src="linkedin.png" class="a5"></a>

</div>
</body>
</html>