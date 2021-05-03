<?php
include "autoload.php";

$list = new Listt(['Иванов', 'Петров', 'Сидоров']);

echo $list
    ->setTag("ol")
    ->setType("A")
    ->html();

echo $list
    ->setTag("ol")
    ->setType("1")
    ->html();

echo $list
    ->setTag("ol")
    ->setType("I")
    ->html();

echo $list
    ->setTag("ol")
    ->setType("i")
    ->html();

echo $list
    ->setTag("ol")
    ->setType("a")
    ->html();


