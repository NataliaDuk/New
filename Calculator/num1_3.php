<?php
$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$num3 = $_POST["num3"];

// while ($num1 < $num2) {
//     echo $num1;
//     $num1 = $num1 + $num3;
// }

for ($i = $num1; $i <= $num2; $i +=$num3) {
    echo $i . "<br>";
}
