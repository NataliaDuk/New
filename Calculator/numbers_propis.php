<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <p> Введите сообщение</p>
        <p><textarea name="text"></textarea></p>
        <input type="submit" value="Отправить">
    </form><br>

    <?php

    $name = $_POST["text"];
    

        $numbers = [
            1 => "один",
            2 => "два",
            3 => "три",
            4 => "четыре"

        ];

        foreach (str_split($name) as $value)  {
            echo " " . $numbers[$value];
        }
    


    // echo $name=str_replace($numbers, $numbers[$value], $name);

    ?>





</body>

</html>