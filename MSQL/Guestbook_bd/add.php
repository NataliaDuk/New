<?php
$link = mysqli_connect("Localhost", "root", "root", "guestbook");
if (!empty ($_POST)) {
    $sql = "INSERT INTO `opros` (`City`, `E-mail`, `Gender`, `Age`) VALUE ('$_POST[City]', '$_POST[mail]', '$_POST[Gender]', '$_POST[Age]')";
    mysqli_query($link, $sql);
}

header("Location: final.html");


