<?php
include "Person.php";
include 'Worker.php';
include 'Student.php';
include 'Ingener.php';

$worker = new Legs("Alex", 20);
echo $worker->say() . "<br>";
echo $worker->doJob();

echo "<br>";

$student = new Top("Oleg", 18);
echo $student->say() . "<br>";
echo $student->doJob();
echo "<br>";

$ingener = new Ingener("Andrey", 35);
echo $ingener->say() . "<br>";
echo $ingener->doJob();