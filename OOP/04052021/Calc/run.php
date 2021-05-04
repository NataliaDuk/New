<?php
include 'autoload.php';


$calc = new NewCalc(2, 3);

echo $calc->sum();

echo "<br>";

echo $calc->mult();

echo "<br>";

echo $calc->div();

echo "<br>";

echo $calc->diff();