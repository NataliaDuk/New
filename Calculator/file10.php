<?php
$data =  file("opros.txt");

// print_r($data);
$N1 = $_POST["N1"];
// echo $N1;
$data[$N1] = ($data[$N]+1)."\n";
print_r($data);
$saveData = $data[0] . $data[0] . $data[1] . $data[2];
$fp = fopen("opros.txt", 'w+');
fwrite($fp, $saveData);
fclose($fp);
