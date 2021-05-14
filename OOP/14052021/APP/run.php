<?php
include "autoload.php";

//use Duk\Calc;
$calc= new Duk\Calc(2, 3);
echo $calc->sum();