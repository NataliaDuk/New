<?php
include_once "TList.php";
include_once "UL.php";
include_once "OL.php";


//$ul = new UL();
//echo $ul
//    ->setData(['Иванов', 'Петров', 'Сидоров'])
//    ->setType("square")
//    ->html();
//echo $ul
//    ->setType("circle")
//    ->html();

$ol = new OL();
echo $ol
    ->setData(['Иванов', 'Петров', 'Сидоров'])
    ->setType("A")
    ->html();
echo $ol
    ->setType("1")
    ->html();
