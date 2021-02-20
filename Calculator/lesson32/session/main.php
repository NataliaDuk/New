<?php
session_start();
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
<form action="login.php" method="post">
    Введите свое имя.
    <input type="text" name="name">
    <input type="submit" value="ok">
</form>
<a href="page2.php">Перейти на страницу 2?</a>
<?= $_SESSION["username"]??"Вы не вошли в систему!" ?>
<a href="logout.php">Разлогиниться?</a>
</body>
</html>