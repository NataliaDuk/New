<?php
$ret=file_get_contents('TolstoyLev.txt');
preg_match_all('/сударь\b/iu',$ret, $str);
print_r($str);
