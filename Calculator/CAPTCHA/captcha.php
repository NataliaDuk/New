<?php
$number1=rand (0,9);
$number2=rand (0,9);
$numberResult=$number1+$number2;
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
if ($_POST==$str) {echo "Yes"}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style75.css">
</head>

<body>
   
    <h1>1.Скрипт капча</h1>
    <form class="meny1" method="post" action="">
        <input type="text" name="name"><br>
        <span><?php echo "$number1+$number2=" ?></span><br>
        <input type="text" name="captcha" placeholder="Введите цифры прописью"><br><br>
        <input type="submit" value="Отправить"><br>
    </form>
<!-- 
    
    <h1>Задача 2.Текстовый калькулятор.</h1>
    <form class="meny1" method="post">
        <p> Введите слагаемые от 1 до 10 прописью</p>
        <p><textarea cols="20px" rows="2px" name="slag1"></textarea></p>
        <p><textarea cols="20px" rows="2px" name="slag2"></textarea></p>
        <input type="submit" value="Отправить">
    </form><br> -->
    


</body>

</html>