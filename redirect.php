<?php

session_start();

if($_SESSION['log']=="Y"){
header("Location:home2.php");
}
else if($_SESSION['log']=="N"){
header("Location:index.php");
}
?>