<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $arr = [1, "two" => 2, 3, 4, 5];

    foreach ($arr as $value) {
        echo "$value<br>";
    }
    $arr = [1, "two" => 2, 3, 4, 5];

    foreach ($arr as $key => $value) {
        echo "$key = $value<br>";
    }


    ?>





</body>

</html>