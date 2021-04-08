<?php
include_once "connect.php";

$sql="DELETE FROM `vedomost` WHERE id=$_GET[id]";
mysqli_query($link, $sql);

header("Location: index.php");