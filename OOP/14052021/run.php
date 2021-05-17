<?php
include "autoload.php";


use Duk\Calc as CalcD;
use Nata\Calc as CalcN;


$calc2 = new CalcD(2, 3);
echo $calc2 -> sum();

$calc1 = new CalcN(2,3);
echo $calc1->sum();

//$calc1 = new Duk\Calc(2, 3);
//echo $calc1-> sum();
//
//$calc2 = new Nata\Calc(2, 3);
//echo $calc2-> sum();