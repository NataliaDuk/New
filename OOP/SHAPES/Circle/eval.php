<?php
include_once "circle.php";

$circle= new Circle($_POST["r"]);
echo "Результат вычисления: ". $circle->{$_POST["op"]}();
