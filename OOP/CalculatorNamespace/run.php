<?php
include "autoload.php";


use First\Calc as CalcF;
use Second\Calc as CalcS;

echo "<h1>Результаты вычислений: </h1>";

$calc1 = new CalcF(2, 3);
echo "a + b =" . $calc1->sum() . "<br>";

$calc2 = new CalcF(3, 3);
echo "a * b =" . $calc2->multi() . "<br>";

$calc3 = new CalcS(5, 1);
echo "a - b =" . $calc3->diff() . "<br>";

$calc4 = new CalcS(6, 2);
echo "a / b =" . $calc4->div() . "<br>";


