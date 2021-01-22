<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <link rel="stylesheet" href="style26.css">
</head>

<body>

<?php

$N1 = $_POST["N1"];

$data =  file_get_contents("opros_1.txt");


$data[$N1] = ($data[$N1]+1)."\n";
$s=$data[0]+$data[1]+$data[2]+$data[3];

echo "<div class=meny>";
echo "<h1>Результаты голосования: <h1>"; 
echo "<h2>Очень хороший: " . round($data[0]*100/$s, 1) . "%<h2>";
echo "<h2>Хороший: " . round($data[1]*100/$s, 1). "%<h2>";
echo "<h2>Нормальный: " . round($data[2]*100/$s, 1) . "%<h2>";
echo "<h2>Плохой: " . round($data[3]*100/$s, 1) . "%<h2>";
echo "<h1>ИТОГО: " .$s. " голосов<h1>";
echo "</div>";
// $saveData = explode("","opros_1.txt");

$saveData = $data[0] . $data[1] . $data[2] . $data[3];
file_put_contents("opros_1.txt", $saveData);

?>
// <div class="start2">
//         <img src="img11.jpg" alt="name"></div>
// </body>

// </html>