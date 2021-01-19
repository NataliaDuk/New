<?php
$arr=explode (':', file_get_contents('file_f.txt'));
$arr[2]++;
print_r($arr);
file_put_contents('file_f.txt', implode (':', $arr));
