<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $arr = [2, 5, 8, 9, 12];
    $s1 = 0;

    for ($i = 0; $i < count($arr); $i++) {
        $s1 = $s1 + $arr[$i];
    }
    echo $s1 . "<br>";

    $s2 = 0;
    foreach ($arr as $value) {
        $s2 = $s2 + $value;
    }
    echo $s2 . "<br>";
    // То же самое
    ?>





</body>

</html>