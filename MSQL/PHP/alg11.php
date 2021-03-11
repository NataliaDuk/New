<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $n = 4;
    $s = 0;
    $i = 1;
    // оператор цикла с предусловием
    while ($i <= $n) {
        $s = $s + $i;
        $i = $i + 1;
    }
    echo $s;

    ?>
</body>

</html>