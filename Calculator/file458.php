<?php
$ini_array = parse_ini_file("file.ini");
print_r($ini_array);

$ini_array = parse_ini_file("file.ini", true);
print_r($ini_array);
