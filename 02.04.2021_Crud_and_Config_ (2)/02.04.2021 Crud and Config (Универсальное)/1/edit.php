<?php //
include_once "connect.php";
$str = [];
foreach ($_POST as $field => $value) {
    if ($field != "id") {
        $str[] = "$field = '$value'";
    }
}
/** @var array $config */
$sql = "UPDATE `{$config['mysql']['table']}` SET " . implode(",", $str) . " WHERE id=$_POST[id]";
/** @var mysqli $link */
mysqli_query($link, $sql);
header("Location: show.php");
