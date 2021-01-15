<?php


$handle = fopen("https://ru.wikipedia.org/" , "r");
$contents = '';
while (!feof($handle)) {
    $contents .=  fread($handle, 1);
}
fclose($handle);
echo $contents;


