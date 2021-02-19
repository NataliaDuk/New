<?php //logout.php
session_start();
unset($_SESSION['username']);
header ("Location: main.php");
?>