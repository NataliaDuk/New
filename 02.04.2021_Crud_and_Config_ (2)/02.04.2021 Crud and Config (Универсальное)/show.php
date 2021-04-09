<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
/**
 * @var mysqli $link соединение с базой данных
 * @var array $config конфигурационные данные из файла config
 */

include_once "connect.php";

$fields = fieldsList($link, $config["mysql"]["table"]);//вызов функции,которая возвращает список полей из таблицы базы данных
//print_r($fields);

$sql = "SELECT * FROM `{$config['mysql']['table']}`"; // имя таблицы передается из файла config


$result = mysqli_query($link, $sql); // запрос к базе данных
echo "<table class='table table-dark table-striped'>";

$headers = "";                 // формируем строку с заголовками таблицы
foreach ($fields as $field) {
    $headers .= "<th>$field</th>";
}

//$headers = "<th>" . implode("</th> <th>", $fields) . "</th>"; // альтернатива строк с 30 по 33

echo "$headers <th>удалить</th> <th>редактировать</th>";

while ($row = mysqli_fetch_assoc($result)) {

    $tableRow = "";                       // формируем строку с данными из таблицы
    foreach ($fields as $field) {
        $tableRow .= "<td>$row[$field]</td>";
    }
    echo "<tr> $tableRow" .
        // добавляет кнопки удалить и редактировать в строку таблицы
        "<td> <a href='delete.php?id=$row[id]'> ❌ </a> </td><td><a href='editShow.php?id=$row[id]'>🖊️</td></tr>";
}
echo "</table>";
?>
<a href="showAdd.php" class="btn btn-success">Добавить</a>
</body>
</html>