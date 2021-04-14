<?php
include_once "cube.php";

$cube= new Cube($_POST["l"]);
echo "Результат вычисления: ". $cube->{$_POST["op"]}();
