<?php
$str = $_POST["name"];

$pat="/\*(.*?)\*/iu";
$ret='<i>$1</i>';
$str1=preg_replace($pat,$ret,$str);
echo $str1;