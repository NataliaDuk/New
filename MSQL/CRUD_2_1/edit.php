<?php //edit.php
include_once "connect.php";// подключаем файл connect для соединения с базой данных
$str = []; //формируем массив
// перебираем массив $_POST, из которого в массив $str будем записывать пары ключ=>значения не включая поле  "id"
foreach ($_POST as $field => $value) {
    if ($field != "id") {
        $str[] = "$field = '$value'";
    }
}
//создаем переменную, в которой формируем запрос для редактирования записей в базе данных
$sql = "UPDATE `{$config['mysql']['table']}` SET " . implode(",", $str) . " WHERE id=$_POST[id]";// с помощью implode собираем новые значения полей в одну строку через запятую

mysqli_query($link, $sql);//выполняем запрос
header("Location: index.php");// переходим на главную страницу