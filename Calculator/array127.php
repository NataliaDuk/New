<?php

$arr1=array(4,1,2,5,3);
$arr2=array ("четыре", "один", "два", "пять", "три");

array_multisort($arr1, $arr2);
print_r($arr1);
print_r($arr2);

?>