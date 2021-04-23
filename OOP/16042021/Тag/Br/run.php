<?php
include_once "Br.php";

$br = new Br();
echo $br
        ->setInnerTextA("Текст")
        ->setInnerTextB("Текст после переноса")
        ->html();