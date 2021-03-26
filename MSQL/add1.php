<?php


$link = mysqli_connect("Localhost", "root", "root", "guestbook");
//print_r(($_POST));

if (!empty($_POST)) {
    $sql = "INSERT INTO `form` (`name`, `meropriyatie`, `comment`, `phone`) VALUES ('$_POST[name]', '$_POST[meropriyatie]', '$_POST[comment]', '$_POST[phone]')";
//    echo $sql;
    mysqli_query($link, $sql);
}
header("Location: querty.php");