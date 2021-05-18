<?php
include '../autoload.php';
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
    <input type="text" name="b">
    <input type="submit" value="Ok">

</form>

<b><?= (new W10_20\Calc($_POST["a"] ?? 0, $_POST["b"] ?? 0))->sum() ?></b>

</body>
</html>
