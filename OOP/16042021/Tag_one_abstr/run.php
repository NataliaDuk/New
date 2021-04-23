<?php
include "autoLoad.php";
$br = new Br();

echo $br
    ->setInnerTextA("текст до переноса")
    ->setInnerTextA("текст после переноса")
    ->html();