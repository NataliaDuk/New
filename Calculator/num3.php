<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

// if ($num1 > $num2) {
//     $buf = $num1;
// } else {
//     $buf = $num2;
// }
// if ($buf > $num3) {
//     $max = $buf;
// } else {
//     $max = $num3;
// }
// echo $max;
echo max($num1, $num2, $num3);
