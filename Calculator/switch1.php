<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $numbers = "три";
    
    switch ($numbers) {
        case "один":
            $str = "one";
            break;

        case "два":
            $str = "two";
            break;

        case "три":
            $str = "three";
            break;

        case "четыре":
            $str = "four";
            break;


        default:
            $str == "нет числа";
            break;
    }

    echo $str;


    ?>





</body>

</html>