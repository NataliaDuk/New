<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>Для вычисления факториала числа, <br>введите число </p>
    <form method="post"><input type="text" name="fact"><input type="submit"></form><br>

    <?php
    $a = $_POST["fact"];
    $x = 1;

    for ($i = $a; $i > 0; $i--) {
        $x *= $i;
    }
   
    echo "fact ($a) = $x";

    ?>




</body>

</html>