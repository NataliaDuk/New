<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedomost</title>
    <link rel="stylesheet" href="style25.css">
</head>

<body>
    <h1>Зарплатная ведомость</h1>
    <table>
        <tr>
            <th>N</th>
            <th>Фамилия</th>
            <th>Сумма, бел.руб.</th>
        </tr>

        <?php
        include "funct_ved.php";

        $vedomost1 = [
            [1, "Иванов", 1550],
            [2, "Петров", 1600],
            [3, "Сидоров", 1650],
            [4, "Фролов", 1700],
        ];

        echo htmlTable($vedomost1);

        ?>
    </table>