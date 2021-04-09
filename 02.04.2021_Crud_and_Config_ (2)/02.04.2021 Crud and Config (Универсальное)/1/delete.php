<?php
include_once "connect.php";
/**
 * @var mysqli $link соединение с базой данных
 * @var array $config конфигурационные данные из файла config
 */

$sql = "DELETE FROM {$config['mysql']['table']} WHERE id = $_GET[id]";
mysqli_query($link, $sql);
header("Location: show.php");
