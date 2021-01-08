<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZADACHA PRO ZERNO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Задача о зёрнах на шахматной доске</h1>
<nav class="meny">
<a href="https://ru.wikipedia.org/wiki">Условия задачи о зернах на шахматной доске</a>       
<a href="https://www.php.net/manual/ru/langref.php">Справочник PHP</a>
        <a href="https://itstep.by/">Курсы-IT</a>

    </nav>
    <img src="img13.jpg" height="400" width="600" alt="">
    <form class="meny1" method="post">
        <p> Введите количество строк  шахматной доски</p>
        <p><textarea cols="10px" rows="2px" name="rows1"></textarea></p>
        <p> Введите количество столцов шахматной доски</p>
        <p><textarea cols="10px" rows="2px" name="cols1"></textarea></p>
        <input type="submit" value="Отправить">
    </form><br>
<?php

$rows =$_POST["rows1"];
$rows =$_POST["cols1"];

$table = '<table class="shahmat">';

for ($tr=1; $tr<=$rows; $tr++){
    $table .= '<tr>';
    for ($td=1; $td<=$cols; $td++){
        $table .= '<td>'. $tr*$td .'</td>';
    }
    $table .= '</tr>';
}

$table .= '</table>';
echo $table; // сделали эхо всего 1 раз

?>
</body>
</html>