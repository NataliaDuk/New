<?php
// $a = $_POST["c"];

$arr = ["ноль", "один", "два", "три", "четыре", "пять", "шесть", "семь", "восемь", "девять",];


$a= str_replace(" ","",$_POST["c"]);


$b = str_split($a);

$znak = array_search("+", $b);

$i1 = substr($a, 0, $znak);

$i2 = substr($a, $znak + 1, strlen($a));

$index1 = array_search($i1, $arr);

$index2 = array_search($i2, $arr);

$sum = $index1 + $index2;

echo $arr[$sum];