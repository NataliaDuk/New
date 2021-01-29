<?php

$arr=array('one','two','three');
$arr2=array ("четыре", "один", "два", "пять", "три");

echo current($arr) . "<br>";
next ($arr);
echo current($arr) . "<br>";
reset ($arr);
echo current($arr) . "<br>";
end ($arr);
echo current($arr) . "<br>";
?>