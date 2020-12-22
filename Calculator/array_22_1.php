<?php

// $arr1 = [5 => 43, 32, 56, "b"=> 12];
// print_r ($arr1);


// $arr2 = [5=>43, 6=>32, 7=>56, "b"=>12];

// $arr2 = [5 => 43, 32, 56, "b" => 12];
// $arr3 = [5 => 43, 6 => 32, 7 => 56, "b" => 12];
// echo "<pre>";
// print_r($arr2);
// echo "</pre>";
// echo "<pre>";
// print_r($arr3);
// echo "</pre>";


$arr = [5 => 1, 12 => 2];
print_r($arr);
echo "<br>";
$arr[] = 56;
print_r($arr);
echo "<br>";
$arr["x"] = 42;
print_r($arr);
echo "<br>";
unset($arr[5]);
print_r($arr);
echo "<br>";
unset($arr);
