<?php
require __DIR__ . '/vendor/autoload.php';

$calc = new First\Calc(2, 3);
echo $calc->sum();
