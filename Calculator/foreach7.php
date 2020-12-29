<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
   

    $numbers = [
        "один" => "one",
        "два" => "two",
        "три" => "three",
        "четыре" => "four"

    ];
    if (isset($numbers[$name])) {
        echo $numbers[$name];
    } else {
        echo "нет слова";
    }

    


    ?>





</body>

</html>