<?php
include_once "circle.php";

$circle= new Circle($_POST["r"]);
echo $circle->{$_POST["op"]}();
