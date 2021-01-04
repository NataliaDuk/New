<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <p> Введите слагаемые</p>
        <p><textarea name="slag1"></textarea></p>
        <p><textarea name="slag2"></textarea></p>
        <input type="submit" value="Отправить">
    </form><br>

    <?php

    $num1 = $_POST["slag1"];
    $num2 = $_POST["slag2"];
    $numbers1 = [
        "один" => 1,
        "два" => 2,
        "три" => 3,
        "четыре" => 4,
        "пять" => 5,
        "шесть" => 6,
        "семь" => 7,
        "восемь" => 8,
        "девять" => 9,
        "девять" => 10

    ];
    foreach (str_split($num1)  as $value) {
       $n1=$numbers1[$value];
    }
    foreach (str_split($num2)  as $value) {
        $n2=$numbers1[$value];
    }
    // $s = $n1 + $n2;
    echo $n1+$n2;
    // // }
    // foreach ($name as &$v) {
    //     if ($v <> is_int($name)) $v++;
    // }






    // echo $name=str_replace($numbers, $numbers[$value], $name);

    ?>





</body>

</html>