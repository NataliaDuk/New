<?php

$color=array("a"=>"red", "b"=> "blu", "c"=>"blac");


asort($color);
foreach ($color as $key => $value) {
   echo "$key =$value\n";
}

$arr=[1,2,3,4,5];
print_r($arr);
rsort($arr);
print_r($arr);

$color=array("a"=>"red", "b"=> "blu", "c"=>"blac");
arsort($color);
foreach ($color as $key => $value) {
   echo "$key =$value\n";
}

$color=array("a"=>"red", "b"=> "blu", "c"=>"blac");
ksort($color);
foreach ($color as $key => $value) {
   echo "$key =$value\n";
}
?>