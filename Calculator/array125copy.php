<?php

$arr=array("img12.png", "img10.png","img2.png","img1.png");

natsort($arr);
print_r($arr);

natcasesort($arr);
print_r($arr);
?>