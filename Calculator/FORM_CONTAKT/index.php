<?php
if (empty($_POST["tel"])) {
    $errorTel = "Не введен номер телефона";
} elseif ($errorTel = !preg_match("/^\+\d[\d\(\)\-]{9,14}\d$/iu", $_POST["tel"])) {
    $errorTel = "Не корректно введен номер";
} else {
    $tel = $_POST['tel'];
}
if (empty($_POST["email"])) {
    $errorMail = "Не введен Email";
} elseif ($errorMail = !preg_match("/^.+@.+\..+$/iu", $_POST["email"])) {
    $errorMail = "Не верный формат email";
} else {
    $email  = $_POST["email"];
}
if (empty($_POST["name"])) {
    $errorName = "Не введено имя";
} elseif ($errorName = !preg_match("/^[а-яa-zA-ZА-Я ]*$/iu", $_POST["name"])) {
    $errorName = "Не корректно введено имя";
} else {
    $name = $_POST["name"];
}
if (empty($_POST["url"])) {
    $errorURL = "Не введен адрес соцсети";
} elseif ($errorURL = !preg_match("/\bhttps:\/\/vk\.com\/|www\.facebook\.com\/|www\.instagram\.com\/|twitter\.com\//", $_POST["url"])) {
    $errorURL = "Не корректно введен адрес";
} else {
    $url = $_POST["url"];
}
if ($name && $email && $tel && $url) {
    $registr = "Вы зарегистрированы";
    $row = "\n<----->\n" .
        $name . "\n" .
        $tel . "\n" .
        $email . "\n" .
        $url;
    file_put_contents("contact.txt", $row, FILE_APPEND);
} else {
    $registr = "Вы не зарегистрированы";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style265.css">
</head>

<body>
    <h1>Заполните контактные данные</h1>
    <div class="text">
        <?php
        $data = file_get_contents("contact.txt");
        $records = explode("<----->", $data);
        ?>
    </div>
    <div class="ident">
        <form action="?" method="POST">
            <h2>Введите Ваше имя</h2>
            <input type="text" name="name" class="user">
            <span class="textError"> <?= $errorName ?></span>
            <h2>Введите Ваш номер телефона<br><i>(в международном формате +xxxxxxxxx)</i></h2>
            <input type="text" name="tel" class="number">
            <span class="textError"> <?= $errorTel ?></span>
            <h2>Ваш e-mail</h2>
            <input type="text" name="email" class="mail">
            <span class="textError"> <?= $errorMail ?></span>
            <h2>Ваш адрес в соцсети<br><i>(ВКонтакте, Facebook, Instagram, Twitter)</i></h2>
            <input type="text" name="url" class="social">
            <span class="textError"> <?= $errorURL ?></span><br><br>
            <input type="submit" value="ok" class="input"><br>
            <h2><?= $registr ?></h2>
        </form>
    </div>
</body>

</html>