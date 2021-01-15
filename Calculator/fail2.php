<?php
$fp = fopen("file.txt", "r");
$str= fread($fp,filesize("file.txt"));
echo $str;
fclose($fp);
