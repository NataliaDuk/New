<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
<h3>Форма для регистрации</h3>
<?php
if (!isset($_POST['regbtn'])) {

?>
<form action="index.php?page=3" method="post">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Введите логин</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="login" placeholder="Логин">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Введите пароль</label>
        <input type="password" class="form-control" id="formGroupExampleInput" name="pass1" placeholder="Пароль">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Повторите пароль</label>
        <input type="password" class="form-control" id="formGroupExampleInput" name="pass2" placeholder="Пароль">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Введите адрес электронной почты</label>
        <input type="text" class="form-control" id="formGroupExampleInput" name="mail" placeholder="E-mail">

    </div>
    <button type="submit" class="btn btn-primary btn-lg" name="regbtn">Регистрация</button>

</form>
    <?php
}
else {
    if (register($_POST['login'],$_POST['pass1'],$_POST['mail'])) {
        echo "<h3><span style='color:red'>Регистрация прошла успешно</span></h3>";

    }

}
?>
</body>
</html>