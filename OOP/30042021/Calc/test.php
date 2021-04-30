<?php
include "Calculator.php";

$calc = new Calculator(1,2);
//$calc->setA(5);
//echo $calc
//    ->setA(1)
//    ->getA();
//echo $calc
//    ->setA(1)
//    ->setB(2)
//    ->sum();
echo $calc->sum();
echo $calc->setA(3)->setB(3)->sum();
