<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style75.css">
</head>

<body>
    <nav class="meny">
        <a href="https://www.php.net/manual/ru/langref.php">Справочник PHP</a>
        <a href="https://itstep.by/">Курсы-IT</a>

    </nav>
    <h1>Задача 1.Сервис, заменяющий в тексте пользователя все цифры на слова прописи этих цифр.</h1>
    <form class="meny1" method="post">
        <p> Введите сообщение, включающее символы и цифры</p>
        <p><textarea cols="50px" rows="5px" name="text"></textarea></p>
        <input type="submit" value="Отправить">
    </form><br>

    <?php

    $name = $_POST["text"];

    $numbers = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];
    $numbers1 = str_split($name);
    echo "Результат обработки: " ;
    foreach ($numbers1  as $value) {
        if (is_numeric($value)) {
            echo " " . $numbers[$value];
        } else {
            echo  $value;
        }
    }
    ?>

    <h1>Задача 2.Текстовый калькулятор.</h1>
    <form class="meny1" method="post">
        <p> Введите слагаемые от 1 до 10 прописью</p>
        <p><textarea cols="20px" rows="2px" name="slag1"></textarea></p>
        <p><textarea cols="20px" rows="2px" name="slag2"></textarea></p>
        <input type="submit" value="Отправить">
    </form><br>
    <?php

    $num1 = $_POST["slag1"];
    $num2 = $_POST["slag2"];

    $numbers2 = [
        "один" => 1,
        "два" => 2,
        "три" => 3,
        "четыре" => 4,
        "пять" => 5,
        "шесть" => 6,
        "семь" => 7,
        "восемь" => 8,
        "девять" => 9,
        "десять" => 10

    ];

    $sum = $numbers2[$num1] + $numbers2[$num2];
    
    $str = [
        0 => "ноль",
        1 => "один",
        2 => "два",
        3 => "три",
        4 => "четыре",
        5 => "пять",
        6 => "шесть",
        7 => "семь",
        8 => "восемь",
        9 => "девять",
        10 => "десять",
        11 => "одиннадцать",
        12 => "двенадцать",
        13 => "тринадцать",
        14 => "четырнадцать",
        15 => "пятнадцать",
        16 => "шестнадцать",
        17 => "семнадцать",
        18 => "восемнадцать",
        19 => "девятнадцать",
        20 => "двадцать"

    ];

    echo "Результат вычисления: " . $str[$sum];

    ?>




</body>

</html>