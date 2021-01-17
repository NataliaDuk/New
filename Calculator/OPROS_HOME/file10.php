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
$data =  file("opros.txt");

// print_r($data);
$N1 = $_POST["N1"];
// echo $N1;
$data[$N1] = ($data[$N1]+1)."\n";
echo "<h2>Результаты голосования: "; 
echo "<h2>Очень хороший: " . $data[0] . "<h2>";
echo "<h2>Хороший: " . $data[1]. "<h2>";
echo "<h2>Нормальный: " . $data[2] . "<h2>";
echo "<h2>Плохой: " . $data[3] . "<h2>";

$saveData = $data[0] . $data[1] . $data[2] . $data[3];
$fp = fopen("opros.txt", 'w+');
fwrite($fp, $saveData);
fclose($fp);
?>
</body>

</html>