<?php

$a = [1, 2, 3, 4, 5];
// print_r($a);

// echo $a[2];
$sum = 0;
for ($i = 0; $i < 5; $i++) {
    $sum = $sum + $a[$i];
}
echo $sum;
