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

$fileName="opros_1.txt";
$result = $_POST["N"];

$count = explode(PHP_EOL, file_get_contents($fileName));

$count[$result]++;
file_put_contents($fileName, implode(PHP_EOL, $count));
$sumN=array_sum($count);
$procent=[];
foreach ($count as $value) {
    $procent[]=round(($value/$sumN*100), 1);
}
?>

<div class=meny>
    <?php
echo "<h1>Результаты голосования: </h1>"; 
echo "<h2>Очень хороший:" .$procent[0]. "%</h2>";
echo "<h2>Хороший: " . $procent[1]. "%</h2>";
echo "<h2>Нормальный: ". $procent[2]. "%</h2>";
echo "<h2>Плохой: " . $procent[3]. "%</h2>";
echo "<h1>ИТОГО: " .$sumN. " голосов</h1>";
?>
</div>;

<div class="start2">
        <img src="img11.jpg" alt="name">
    </div>
</body>
</html>