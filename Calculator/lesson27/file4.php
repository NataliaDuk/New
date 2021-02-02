<?php
$str='hypertext dos blu den bar';
$chars=preg_split('/b|d/i', $str);
print_r($chars);