<?php
include_once "connect.php";

$sql="DELETE FROM `opros` WHERE id=$_GET[id]";
mysqli_query($link, $sql);

header("Location: index.php");