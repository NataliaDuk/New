<?php

spl_autoload_register(function ($class) {
$path = str_replace("\\", "/", __DIR__."/APP/$class.php");
if (file_exists($path)) {
include $path;
}
});