<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // $a = $_POST["n"];
    echo $str;
    // $numbers = [
    //     0 => "ноль",
    //     1 => "один",
    //     2 => "два",
    //     3 => "три",
    //     4 => "четыре",
    //     5 => "пять",
    //     6 => "шесть",
    //     7 => "семь",
    //     8 => "восемь",
    //     9 => "девять"
    // ];
    $numbers = ["ноль", "один","два", "три","четыре", "пять", "шесть","семь", "восемь","девять"];
    // $strNum = str_split($a);

    $str = "";

    foreach (str_split($_POST["n"]) as $value) {
        echo " " . $numbers[$value];
    }





    ?>





</body>

</html>