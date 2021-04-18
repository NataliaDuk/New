<?php
include_once "TableCost.php";
include_once "Cost.php";

$rez= new Cost();

$rez->{"setLength$_POST[unit]"}($_POST["length"]);
$rez->{"setWidth$_POST[unit]"}($_POST["width"]);
$rez->{"setHeight$_POST[unit]"}($_POST["height"]);
echo "<h1>Результат вычисления: ". round($rez->payment(),2). '$</h1>';





