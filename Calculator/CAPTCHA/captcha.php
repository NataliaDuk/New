<?php
$number1=rand (0,9);
$number2=rand (0,9);
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