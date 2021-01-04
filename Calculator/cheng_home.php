<?php
$c = $_POST["c"];

$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять",];
$arr1 = str_split($c);

foreach ($arr1 as  $value) {
    if (is_numeric($value)) {
        echo $arr[$value];
    } else {
        echo $value;
    }
}