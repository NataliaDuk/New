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
<?php
if (!isset($_POST['input'])) {

?>
</html>
<br>
<form action="index.php?page=1">
    <div class="input-group mb-3">
        <span class="input-group-text">Авторизация:</span>
        <input type="text" class="form-control" placeholder="Логин" aria-label="Username" name="login">
        <input type="text" class="form-control" placeholder="Пароль" aria-label="Server" name="pass1">
        <button type="submit" class="btn btn-primary" name="input">Вход</button>
    </div>
</form>
<?php
}
else {
    if (input($_POST['login'],$_POST['pass1'])) {
        echo "<h3><span style='color:red'>Регистрация прошла успешно</span></h3>";

    }

}
?>
</body>

