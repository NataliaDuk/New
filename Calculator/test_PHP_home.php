<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $N1 = $_POST["N1"];
    $N2 = $_POST["N2"];
    $N3 = $_POST["N3"];
    $N4 = $_POST["N4"];
    $N5 = $_POST["N5"];
    $N6 = $_POST["N6"];
    $N7 = $_POST["N7"];
    $N8 = $_POST["N8"];
    $N9 = $_POST["N9"];
    $N10 = $_POST["N10"];


    if ($N1 == 1) {
        $i++;
    }
    if ($N2 == 1) {
        $i++;
    }
    if ($N3 == 1) {
        $i++;
    }
    if ($N4 == 1) {
        $i++;
    }
    if ($N5 == 1) {
        $i++;
    }
    if ($N6 == 1) {
        $i++;
    }
    if ($N7 == 1) {
        $i++;
    }
    if ($N8 == 1) {
        $i++;
    }
    if ($N9 == 1) {
        $i++;
    }
    if ($N10 == 1) {
        $i++;
    }
    if ($i >= 5) {
        echo "<h1>Тест успешно пройден!</h1>";
    } else {
        echo "<h1> Вы не прошли тест<h1>";
    }
    ?>
</body>

</html>