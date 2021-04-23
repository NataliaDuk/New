<?php
$a1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r($a1);

$a2 = array_map(function ($x) {
    return $x * $x;
}, $a1);
print_r($a2);

$a2 = [];
foreach ($a1 as $value) {
    $a2[] = $value ** 2;
}
print_r($a2);

$a2 = array_map(fn($x) => $x**2, $a1);
print_r($a2);