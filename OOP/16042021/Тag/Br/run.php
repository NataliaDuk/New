<?php
include_once "Br.php";

$br = new Br();
echo $br
        ->setInnerTextA("Текст")
        ->setStyle('color:red; font size: 2em')
        ->setInnerTextB("Текст после переноса")
        ->html();