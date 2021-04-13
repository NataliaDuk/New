<?php
$users='pages/users.txt';
function register($name, $pass, $mail)
{
    //блок проверки данных

    $name=trim(htmlspecialchars($name));
    $pass=trim(htmlspecialchars($pass));
    $mail=trim(htmlspecialchars($mail));

        if ($name == '' || $pass == '' || $mail == '') {
            echo "<h3><span style='color:red'>Заполните все необходимые поля!</span></h3>";
            return false;
        }
        if (strlen($name) < 3 || strlen($pass) < 3 || strlen($pass) > 30) {
            echo "<h3><span style='color:red'>Длина символов должна быть не менее 3 и не более 30</span></h3>";
            return false;
        }
//блок проверки уникальности имени пользователя
        global $users;
        $file = fopen($users, 'a+');
        while ($line = fgets($file, 128)) {
            $readname = substr($line, 0, strpos($line, ':'));
            if ($readname == $name) {
                echo "<h3><span style='color:red'>Пользователь с таким именем уже существует</span></h3>";
                return false;
            }
        }
//блок добавления нового пользователя
        $line = $name . ':' . md5($pass) . ':' . $mail . "\r\n";
        fputs($file, $line);
        fclose($file);
        return true;
    }

    function input($name, $pass)
    {
        $name = trim(htmlspecialchars($name));
        $pass = trim(htmlspecialchars($pass));

        if ($name == '' || $pass == '') {
            echo "<h3><span style='color:red'>Заполните все необходимые поля!</span></h3>";
            return false;
        }
        global $users;
        $file = fopen($users, 'r');
        while ($line = fgets($file, 128)) {
            $readname1 = substr($line, 0, strpos($line, ':'));
            $readname2 = substr($line, 0, strrchr($line, ':'));
            if ($readname1 == $name and $readname2 == $pass) {
                echo "<h3><span style='color:black'>Добро пожаловать! Вы можете принять участие в опросе.</span></h3>";
                return false;
            } else echo '<script>window.Location = "index.php?page=4";</script>';
        }
    }