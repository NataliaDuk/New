<?php //add.php
include_once "connect.php";// подключаем файл connect для соединения с базой данных

/**
 * @var mysqli $link соединение с базой данных
 * @var array $config конфигурационные данные из файла config
 */
if (!empty($_POST)) {
    $fields = fieldsList($link, $config["mysql"]["table"]);// вызываем функцию, чтобы получить список полей
    //создаем переменную, в которой формируем запрос для вставки записи значений полей в базу данных
    $sql = "INSERT INTO `{$config['mysql']['table']}`(" . implode(", ", $fields) . ") VALUES ("."'".implode("', '",$_POST)."'".")"; // с помощью implode собираем название и значение полей в одну строку через запятую в кавычках

    mysqli_query($link, $sql); //выполняем запрос
}
header("Location: show.php");// переходим на главную страницу