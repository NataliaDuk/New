<?php
include '../autoload.php';
use Web\CalcDiff;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="?" method="post">
    <input type="text" name="a">
    <select name="op">
        <option value="sum">Сумма</option>
        <option value="mult">Умножить</option>
        <option value="diff">Делить</option>
    </select>
    <input type="text" name="b">
    <input type="submit" value="Ok">

</form>
<b><?= (new CalcDiff($_POST['a']??0, $_POST['b']??0))->{$_POST['op']}()?></b>
</body>
</html>
