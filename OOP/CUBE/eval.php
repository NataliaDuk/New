<?php
include_once "cube.php";

$cube= new Cube($_POST["l"]);
echo $cube->{$_POST["op"]}();
