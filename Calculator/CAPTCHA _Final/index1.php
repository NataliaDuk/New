<?php
$number = $_POST["number"];
$numbersUser = $_POST["numbersUser"];
$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Captcha</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body>
<div class="form">
<span class="number"><?= $numbers=rand(10, 99) ?></span>
    <p>Введите числа на картинке прописью, чтобы убедиться, что Вы не робот.</p>
    <form method="post" action="">
        <input type="hidden" name="number" value="<?= $numbers ?>">
        <input type="text" name="numbersUser"><br><br>
        <input type="submit" value="Я не робот"><br><br>
    </form>

    <?php
    if (preg_match("/.*(" . $arr[$number[0]] . ")\s+(" . $arr[$number[1]] . ").*/iu", $numbersUser)) {
    echo "Вы не робот";
} else {
    echo "Не верно введены числа";
}

?>
</div>
</body>

</html>