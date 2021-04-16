<?php
include_once "PRE.php";

$pre = new Pre();
echo $pre
    ->setInnerText("Hi \n Привет")
    ->html();
