<?php //edit.php
include_once "connect.php";
$str = [];
foreach ($_POST as $field => $value) {
    if ($field != "id") {
        $str[] = "$field = '$value'";
    }
}
$sql = "UPDATE `{$config['mysql']['table']}` SET " . implode(",", $str) . " WHERE id=$_POST[id]";
mysqli_query($link, $sql);
header("Location: show.php");