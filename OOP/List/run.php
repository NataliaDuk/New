<?php
include "autoLoad.php";

$ol= new Ol(['Иванов', 'Петров', 'Сидоров']);
echo $ol->setType("1")->html();
echo $ol->setType("A")->html();
echo $ol->setType("a")->html();
echo $ol->setType("I")->html();
echo $ol->setType("i")->html();

$ul= new Ul(['Фролов', 'Галкин', 'Воронов']);
echo $ul->setType("disk")->html();
echo $ul->setType("circle")->html();
echo $ul->setType("square")->html();

echo get_class($ol->setData([]));
echo get_class($ul->setData([]));