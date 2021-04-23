<?php

use JetBrains\PhpStorm\Pure;

function speed_test(callable $fun, mixed $arg, int $n = 100000): float
{
    $time1 = microtime(TRUE);
    for ($i = 0; $i < $n; $i++) {
        $fun($arg);
    }
    $time2 = microtime(TRUE);
    return $time2 - $time1;
}

// echo pow(2, .5); // 2(1/2)
#[Pure] function my_sqrt(float $x): float
{
    return pow($x, .5);
}

echo speed_test('sqrt', 20);
echo "<br>";
echo speed_test('my_sqrt', 20);



