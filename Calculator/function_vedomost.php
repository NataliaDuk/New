<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $vedomost1 = [
        [1, "Иванов", 500],
        [2, "Петров", 600],
        [3, "Сидоров", 700]
    ];
    //  print_r($vedomost);

    function arrayName($vedomost)
    {
        $table = "<table>";
        foreach ($vedomost as $value) {
            echo "<td></td>";
            for ($i = 0; $i <= count($value) - 1; $i++) {
                echo "<tr>";
                foreach ($vedomost as $value) {
                    echo "<td>$value[$i]</td>";
                }
                echo "</tr>";
            }
        }

        return $table;
    }

    echo arrayName($vedomost1);

    ?>