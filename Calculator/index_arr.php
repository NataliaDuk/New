<?php

$a = ["x"=>5, "y"=>7];
// print_r($a);

// echo $a[2];
$sum = 0;
for ($i = 0; $i < 5; $i++) {
    $sum = $sum + $a[$i];
}
echo $sum;
// print_r($a);
