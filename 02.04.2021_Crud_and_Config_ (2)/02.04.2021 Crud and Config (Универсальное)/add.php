<?php
include_once "connect.php";
/** @var array $config */
/** @var mysqli $link */
if (!empty($_POST)) {
    $fields = fieldsList($link, $config["mysql"]["table"]);

    $sql = "INSERT INTO `{$config['mysql']['table']}`(" . implode(", ", $fields) . ") VALUES (" . "'" . implode("', '", $_POST) . "'" . ")";

    mysqli_query($link, $sql);
}
header("Location: show.php");
