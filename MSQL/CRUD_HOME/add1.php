<?php
include_once "connect.php";

if (!empty($_POST)) {
    $sql = "INSERT INTO `opros`(`City`, `Email`, `Gender`, `Age`) VALUES ('$_POST[city]','$_POST[mail]', '$_POST[gender]','$_POST[age]')";
    /** @var mysqli $link */
    mysqli_query($link, $sql);
}
header("Location: index.php");