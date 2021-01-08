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
        <a href="test_PHP_home.html">Главная</a>
        <a href="#">Справочник PHP</a>
        <a href="#">Курсы-IT</a>
    </nav>
    <h1>Сервис, заменяющий в тексте пользователя все цифры на слова прописи этих цифр.</h1>
    <form method="post">
        <p> Введите сообщение</p>
        <p><textarea name="text"></textarea></p>
        <input type="submit" value="Отправить">
    </form><br>

    <?php

    $name = $_POST["text"];

    $numbers = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];
    $numbers1 = str_split($name);
    foreach ($numbers1  as $value) {
        if (is_numeric($value)) {
            echo " " . $numbers[$value];
        } else {
            echo $value;
        }
    }

    ?>





</body>

</html>