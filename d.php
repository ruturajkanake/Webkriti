<?php

session_start();
$_SESSION['log']="N";

if($_SESSION['log']=="Y"){
header("Location:home2.php");
}
else if($_SESSION['log']=="N"){
header("Location:home1.php");
}
?>