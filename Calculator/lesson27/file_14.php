<?php
$str = $_POST["name"];

echo preg_replace(
    [
        "/:\)/iu",
        "/:\(/iu"
    ],
    [
        "<img height='100px' weight='100px' src='smailik-ylibka-1.jpg'>",
        "<img height='200px' weight='200px' src='img src='sad3.jpg'>"
    ],
    $str);