<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonachi</title>
</head>

<body>
    <?php
    $F = $_POST["F"];
    $N1 = 0;
    $N2 = 1;
    echo $N1 . ", ";
    echo $N2 . ", ";
    do {
        $i++;
        $N = $N1 + $N2;
        echo $N . ", ";
        $N1 = $N2;
        $N1 = $N;
    } while ($i < $F-2)
    ?>
</body>

</html>