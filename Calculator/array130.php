<?php

$arr=array(1,2,3,4,5);
echo count($arr)."<br>"; 
echo array_sum($arr)."<br>"; 


$arr1=array(8,9,10,11,12);

echo array_product($arr1)."<br>";

print_r(array_merge($arr1, $arr));

print_r(array_reverse($arr1))."<br>";
echo array_search("9", $arr1) . "<br>"; // 4

$array2 = ["one", 2, "3", 4, "five"];

if (in_array("3", $array2)) {
    echo "Find string 3"; // Find string 3