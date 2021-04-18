<?php
include_once "A.php";

$a = new A();
echo $a
    ->setHref("https://www.tut.by/")
    ->setInnerText('тут.бай')->html();

