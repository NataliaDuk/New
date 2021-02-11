<?php
if ((!empty($_POST)) && ($_POST["name"] != "") && ($_POST["text"] != "")) {
    $row = "\n<----->\n" .
        $_POST["tel"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["name"];
    $_POST["url"];
    file_put_contents("contact.txt", $row, FILE_APPEND);
    header("Location: ?");
    die();
}

if (empty($_POST["tel"])) {
    $errorTel = "Не введен номер телефона";
} else {
    $tel = $_POST["tel"];
    if (!preg_match("/^\+\d[\d\(\)\-]{9,14}\d$/iu", $tel)) {
        $errorTel = "Не корректно введен номер";
    }
}

if (empty($_POST["email"])) {
    $errorMail = "Не введен Email";
} else {
    $email = $_POST["email"];
    if (!preg_match("/^.+@.+\..+$/iu", $email)) {
        $errorMail = "Не верный формат email";
    }
}
if (empty($_POST["name"])) {
    $errorName = "Не введено имя";
} else {
    $name = $_POST["name"];
    if (!preg_match("/^[а-яa-zA-ZА-Я ]*$/iu", $name)) {
        $errorName = "Не корректно введено имя";
    }
}

if (empty($_POST["url"])) {
    $errorURL = "Не введен адрес соцсети";
} else {
    $url = $_POST["url"];
    if (!preg_match("/\bhttps:\/\/vk\.com\/|www\.facebook\.com\/|www\.instagram\.com\/|twitter\.com\//", $url)) {
        $errorURL = "Не корректно введен адрес";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact_fornm</title>
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
            <span class="textError"> <?php echo $errorName; ?></span>
            <h2>Введите Ваш номер телефона<br><i>(в международном формате +xxxxxxxxx)</i></h2>
            <input type="text" name="tel" class="number">
            <span class="textError"> <?php echo $errorTel; ?></span>
            <h2>Ваш e-mail</h2>
            <input type="text" name="email" class="mail">
            <span class="textError"> <?php echo $errorMail; ?></span>
            <h2>Ваш адрес в соцсети<br><i>(ВКонтакте, Facebook, Instagram, Twitter)</i></h2>
            <input type="text" name="url" class="social">
            <span class="textError"> <?php echo $errorURL; ?></span><br><br>
            <input type="submit" value="ok" class="input">
        </form>
    </div>
</body>

</html>