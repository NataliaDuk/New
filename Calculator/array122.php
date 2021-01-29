<?php
function bubble($array)
{
    for ($n = count($array) - 1; $n > 0; $n--) {
        for ($i=0; $i < $n; $i++) { 
         if ($array[$i]<$array[$i+1]) {
           $buf=$array[$i];
           $array[$i]=$array[$i+1];
           $array[$i+1]=$buf;
         }
        }
      
    }
    return $array;
}

// $arr = [2, 5, 7, 8, 4, 3];
$arr=["das", "fig", "k", "nc", "ln", "na"];
print_r($array);

$arr2 = bubble($arr);

print_r($arr2);
