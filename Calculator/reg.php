<?php
$login = $_POST["login"];
$passvord = $_POST["passvord"];
if (($login == "Petrov") and ($passvord == "123")) {
    echo "Добро пожаловать";
} else {
    echo "Ошибка";
}
