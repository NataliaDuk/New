<?php
$num1 = $_POST["num1"];


// while ($num1 < $num2) {
//     echo $num1;
//     $num1 = $num1 + $num3;
// }

for ($i = 1; $i <= $num1; $i++) {
    $sum += $i;
}
echo $sum . "<br>";
