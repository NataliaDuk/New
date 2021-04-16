<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $many = 145;
    $month = 12;
    $percent = 0.75;
    $s = $many;

    for ($i = 1; $i <= $month; $i++) {
        $s = $s + ($s / 100 * $percent)/12;
    }
    echo round($s, 2);

    ?>
</body>

</html>