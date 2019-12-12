<?php

session_start();


if($_SESSION['log']=="Y"){

header("Location:profile.php");
}
else if($_SESSION['log']=="N"){
echo '<script  type="text/javascript"> 
alert("Log in first.");
document.location="index.php"
</script>';
die();
}
?>