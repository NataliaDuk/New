<?php
include "vendor/autoload.php";

$table = new W1020\HTML\Table();

echo $table->setData([[1, 2], [3, 4]])->html();

