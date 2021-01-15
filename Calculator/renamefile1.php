<?php
$path1 =  $_POST["path1"];
$path2 =  $_POST["path2"];

if (is_file($path1)) {
    rename($path1, $path2);
} else {
    echo "Warning! This is not file!";
}