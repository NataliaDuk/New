<?php
function min2($a, $b)
{
    return $a < $b ?  $a : $b;
}

$a = 1;
$b = 6;
$c = 3;
$d = 5;
$f = 10;
$e = 7;
echo min2(min2(min2(min2(min2($a, $b), $c), $d), $e), $f);
