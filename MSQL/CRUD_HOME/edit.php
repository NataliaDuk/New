<?php
include_once "connect.php";

$sql="UPDATE `opros` SET `City`='$_POST[city]',`Email`='$_POST[mail]', `Gender`='$_POST[gender]',`Age`='$_POST[age]' WHERE id='$_POST[id]'";
mysqli_query($link, $sql);

header("Location: index.php");