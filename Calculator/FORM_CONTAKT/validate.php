
<?php

if ($ok) {$row = "\n<----->\n" . $name . "\n" . $tel . "\n" . $email .
    "\n" . $url;
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
        $ok = false;
    }
}

if (empty($_POST["email"])) {
    $errorMail = "Не введен Email";
} else {
    $email = $_POST["email"];
    if (!preg_match("/^.+@.+\..+$/iu", $email)) {
        $errorMail = "Не верный формат email";
        $ok = false;
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
        $ok = false;
    }
}
// if ($tel && $email && $name && $url) {
//     echo "<h1>Вы зарегистрированы</h1>";
//     file_put_contents("contact.txt", (trim($_POST["tel"]) . "\n" . trim($_POST["email"]) . "\n" . trim($_POST["name"]) . "\n" . trim($_POST["url"]) . "\n"), FILE_APPEND);
// } else {
//     echo "<h1>Введите правильные данные</h1>";
// }
