<?php
include "Auto.php";
include "Mercedes.php";
include "Lada.php";

$car = new Mercedes();

$car->setBakG(20);

echo $car->drive(). "<br>";
echo $car->drive(). "<br>";
echo $car->drive(). "<br>";
echo $car->drive(). "<br>";
echo $car->drive(). "<br>";
echo $car->drive(). "<br>";
echo $car->drive(). "<br>";
echo $car->drive(). "<br>";

echo "<br>";

$car2 = new Lada();
$car2->setBakL(20);

echo $car2->drive()."<br>";
echo $car2->drive()."<br>";
echo $car2->drive()."<br>";
echo $car2->drive()."<br>";

