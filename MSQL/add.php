<?php


$link = mysqli_connect("Localhost", "root", "root", "guestbook");
//print_r(($_POST));

if (!empty($_POST)) {
    $sql = "INSERT INTO `gb` (`message`, `name`) VALUES ('$_POST[message]', '$_POST[name]')";
    mysqli_query($link, $sql);
}
header("Location: mysql_6.php");