<?php
function max2($a, $b)
{
    if ($a > $b) {
        $res = $a;
    } else {
        $res = $b;
    }
    return $res;
}


$a = 1;
$b = 6;
$c = 3;
$d = 5;
$f = 10;
$e = 7;
echo max2(max2(max2(max2(max2($a, $b), $c), $d), $e), $f);
