<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonachi</title>
</head>

<body>
    <?php
    $F = 15;
    $N1 = 0;
    $N2 = 1;
    for ($i = 1; $i <= $F; $i++) {
        $N = $N1 + $N2;
        $N2 = $N1;
        $N1 = $N;

        echo $N . "<br>";
    }

    ?>
</body>

</html>