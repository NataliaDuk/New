<?php
include "autoLoad.php";

$ol= new Ol(['Иванов', 'Петров', 'Сидоров']);
echo $ol->setType("1")->html();

$ol= new Ol(['Иванов', 'Петров', 'Сидоров']);
echo $ol->setType("A")->html();

$ol= new Ol(['Иванов', 'Петров', 'Сидоров']);
echo $ol->setType("a")->html();

$ol= new Ol(['Иванов', 'Петров', 'Сидоров']);
echo $ol->setType("I")->html();

$ol= new Ol(['Иванов', 'Петров', 'Сидоров']);
echo $ol->setType("i")->html();

$ul= new Ul(['Иванов', 'Петров', 'Сидоров']);
echo $ul->setType("disk")->html();

$ul= new Ul(['Иванов', 'Петров', 'Сидоров']);
echo $ul->setType("circle")->html();

$ul= new Ul(['Иванов', 'Петров', 'Сидоров']);
echo $ul->setType("square")->html();