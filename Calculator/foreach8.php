<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $numbers = 3;
    
    switch ($numbers) {
        case 0:
            $str = "ноль";
            break;

        case 1:
            $str = "один";
            break;

        case 2:
            $str = "два";
            break;

        case 3:
            $str = "три";
            break;

        case 4:
            $str = "четыре";
            break;

        case 5:
            $str = "пять";
            break;

        default:
            $str == "нет числа";
            break;
    }

    echo $str;


    ?>





</body>

</html>