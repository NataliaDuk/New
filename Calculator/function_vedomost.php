<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Зарплатная ведомость</h1>
    <table border="2"  width="800px">
        <tr>
            <th>N</th>
            <th>Фамилия</th>
            <th>Сумма, бел.руб.</th>
        </tr>

        <?php

        $vedomost1 = [
            [1, "Иванов", 1550],
            [2, "Петров", 1600],
            [3, "Сидоров", 1650],
            [4, "Фролов", 1700],
        ];

        function arrayName($vedomost)

        {
            foreach ($vedomost as list($a, $b, $c)) {
                $html = "<tr>";
                echo "<td>$a</td>";
                echo "<td>$b</td>";
                echo "<td>$c</td>";
                echo "</tr>";
            }
            return $html;
        }

        echo arrayName($vedomost1);

        ?>
    </table>