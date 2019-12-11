<!DOCTYPE html>
<html>
<head>
	<title>TECHNOVATION 2k19</title>
	<link rel="icon" href="png1.png">
	<link rel="stylesheet" type="text/css" href="Register.css">

</head>

<body >
<form action="redirect.php" method="post">
<input type="image" src="png1.png" class="a3" name=logo> 
</form>
<h1><div class="a1"> Register </div></h1>
	
<div class="rb" >
<form action="Register.php" method="post">
<p>Name &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Username</p>
<input type="text" name="rname"  placeholder="Enter Name" size="12">&emsp;&nbsp;
<input type="text" name="uname" placeholder="Enter Username" size="12">
<p>Password&emsp;&emsp;&emsp;&emsp; Confirm Password</p>
<input type="Password" name="pwd" placeholder="Enter Password" size="12">&emsp;&nbsp;
<input type="Password" name="cpwd" placeholder="Confirm Password" size="15">
<p>College Name</p>
<input type="text" name="cname" placeholder="Enter College Name" size="24">
<p>Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp; Phone Number</p>
<input type="text" name="email"  placeholder="Enter Email" size="12">
&emsp;&nbsp;&nbsp;
<input type="text" name="num" placeholder="Enter Phone Number" size="17">
<p>Male &nbsp;<input type="radio" name="gender" value="M">&emsp; Female &nbsp;<input type="radio" name="gender" value="F"><br>Already Registered? <a href="home1.php">Click Here </a> &emsp;<input type="submit" name="sub" value="Submit"><br></p>
</form>
</div>
<div class="a4">

<a href="https://www.facebook.com/"><img src="facebook.png" class="a5" ></a>
<a href="https://www.instagram.com/"><img src="instagram.png" class="a5" ></a>
<a href="https://www.twitter.com/"><img src="twitter.png" class="a5" ></a>
<a href="https://www.whatsapp.com/"><img src="whatsapp.png" class="a5" ></a>
<a href="https://www.linkedin.com/"><img src="linkedin.png" class="a5" ></a>

</div>
</body>
</html>


<?php


session_start();
if(isset($_POST['sub']))
{



$conn = new mysqli("127.0.0.1", "root", "" , "Webkriti");


if (!$conn) {
echo '<script  type="text/javascript"> 
	alert("Connection Failed.");
     </script>';
die();
}

if(empty($_POST['rname']) || empty($_POST['uname']) || empty($_POST['pwd']) || empty($_POST['cpwd']) || empty($_POST['cname']) || empty($_POST['email']) || empty($_POST['num']) || empty($_POST['gender']) ){

echo '<script  type="text/javascript"> 
	alert("Please fill out all the fields.");
     </script>';
die();

}



$Name=$_POST['rname'];
$Uname=$_POST['uname'];
$Pwd=$_POST['pwd'];
$Cpwd=$_POST['cpwd'];
$Cname=$_POST['cname'];
$Email=$_POST['email'];
$Num=$_POST['num'];
$Gender=$_POST['gender'];


if($Pwd!=$Cpwd)
{
echo '<script  type="text/javascript"> 
alert("Passwords did not match.");
</script>';
die();

}


if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
echo '<script  type="text/javascript"> 
alert("Invalid Email");
</script>';
die();   
}

$sql = "SELECT * FROM info WHERE UNAME='$Uname'";
$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)!=0)
{
echo '<script  type="text/javascript"> 
alert("Username already exits.");
</script>';
die();
}

$sql = "INSERT INTO info VALUES('$Name','$Uname','$Pwd','$Email','$Cname',$Num,'$Gender')";

if(mysqli_query($conn,$sql))
{
echo '<script  type="text/javascript"> 
alert("Registration Sucessfull.");
document.location="home1.php"
</script>';
die();	
}

else
{

echo '<script  type="text/javascript"> 
alert("Registration Failed.");
</script>';
die();

}

}

?>