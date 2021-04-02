<?php //add.php
include_once "connect.php";

if (!empty($_POST)) {
    $sql = "INSERT INTO `vedomost`(`name`, `zp`) VALUES ('$_POST[name]','$_POST[zp]')";
    /** @var mysqli $link */
    mysqli_query($link, $sql);
}
header("Location: show.php");