<?php //login.php
session_start();
$_SESSION['username']=$_POST["name"];
header ("Location: main.php");
?>