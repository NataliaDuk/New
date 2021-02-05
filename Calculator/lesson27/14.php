<?php
$str = $_POST["name"];
//$str1=preg_replace("/:\)/iu", "<img src='smailik-ylibka-1.jpg'>", $str);
//echo preg_replace("/:\(/iu", "<img src='sad.jpg'>", $str);

$pattern = [
    "/:-?\)/iu",
    "/:-?\(/iu"
];
$replacement = [
    "<img src='smailik-ylibka-1.jpg'>",
    "<img src='sad.jpg'>"
];
echo preg_replace($pattern, $replacement, $str);