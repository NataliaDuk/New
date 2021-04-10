<?php
include_once "trap.php";
$trapez= new Trapez($_POST["a"], $_POST["b"], $_POST["h"]);

echo $trapez->{$_POST["op"]}();

