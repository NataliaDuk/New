<?php
$fileName = "counter.txt";

$fp = fopen($fileName, "r");
$counter= fread($fp,filesize($fileName));

fclose($fp);
echo ++$counter;
$fp = fopen($fileName, "w+");
fwrite($fp, $counter);
fclose($fp);

