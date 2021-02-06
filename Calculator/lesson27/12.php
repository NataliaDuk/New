<?php
$str = $_POST["name"];

$pat="/Минск(.*?)\b/iu";

$ret=file_get_contents('https://www.onliner.by/');
echo $str1=preg_match_all($pat,$ret, $m);
var_dump($m);

<?php


$ret=file_get_contents('TolstoyLev.txt');
preg_match_all('/сударь\b/iu',$ret, $str);
print_r($str);
