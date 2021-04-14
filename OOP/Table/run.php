<?php
include "Table.php";
include 'Legs.php';
include 'Top.php';


$costL = new Legs($_POST["heigtSm"]);
$costL->setHeigtSm();
echo $costL->costD() . "<br>";
echo "<br>";

$costT = new Top($_POST["squareSm"]);
$costT->setSquareSm();
echo $costT->costD() . "<br>";
echo "<br>";

$cost = new Table($costL, $costT);
echo $cost->cost();



