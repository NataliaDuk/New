<?php // подключаем файл config,function и устанавливаем соединение с базой данных
include_once "config.php";
include_once "function.php";

/** @var array $config */
$link = mysqli_connect(
    $config["mysql"]["host"],
    $config["mysql"]["user"],
    $config["mysql"]["password"],
    $config["mysql"]["bd"]
);