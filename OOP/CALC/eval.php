<?php
// подключаем файл, содержащий описание класса Calc
include_once "calc.php";

// сщздаем объект класса Calc и передаем в его конструктор числа a  и b, полученные из html формы

$calc= new Calc($_POST["a"], $_POST["b"]);

// у объекта $calc вызываем метод, название которого получаем в поле "op" html формы ($_POST["op"])
// и выводим результат на экран

echo $calc->{$_POST["op"]}();
