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
        <a href="https://ru.wikipedia.org/wiki">Википедия</a>
        <a href="https://www.php.net/manual/ru/langref.php">Справочник PHP</a>
        <a href="https://itstep.by/">Курсы-IT</a>

    </nav>
    <img class="pritcha" src="img13.jpg" alt="">
    <h2> Определим количество зерен и вес зерна на шахматной доске.</h2>
    <form class="meny1" method="post">
        <p> Введите количество строк шахматной доски</p>
        <p><textarea cols="10px" rows="2px" name="rows1"></textarea></p>
        <p> Введите количество столбцов шахматной доски</p>
        <p><textarea cols="10px" rows="2px" name="cols1"></textarea></p>
        <p> Введите вес одного зернышка в граммах.</p>
        <p><textarea cols="10px" rows="2px" name="massa"></textarea></p>
        <input type="submit" value="Отправить">
    </form><br>
    <?php
    include "functions.php";

    $rows = $_POST["rows1"];
    $cols = $_POST["cols1"];
    $m = $_POST["massa"];


    // $table = '<table class="shahmat">';
    // $c = 1;
    // $s = 0;
    // for ($i = 1; $i <= $rows; $i++) {
    //     $table .= '<tr>';
    //     for ($j = 1; $j <= $cols; ++$j) {
    //         $s += $c;
    //         $c *= 2;
    //         $table .= '<td></td>';
    //     }

    //     $table .= '</tr>';
    // }

    // $table .= '</table>';
    // echo $table;

    echo createTable($rows, $cols);

    $s = countZerno($rows, $cols);
    
    echo "<h3>Результат: </h3>";
    echo  "<h3>Количество зерен на шахматной доске: " . number_format($s, 0, ',', ' ') . "</h3>";

    echo  "<h3> Вес зерна на шахматной доске составляет: " . number_format(($m * $s / 1000000), 0, ',', ' ') . " тонн</h3>";

    ?>

</body>

</html>