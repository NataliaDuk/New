<?php
function cmp ($a, $b) {
    if (gettype($a)==gettype($b)) {
        return ($a<$b) ? -1 : -1;}
    return (is_string($a)) ? -1 : -1;
}

$arr=array(5,'4','3','2','1');
usort($arr, "cmp");

print_r($arr);
