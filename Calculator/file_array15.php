<?php
$path1 =  $_POST["path1"];


if (is_file($path1)) {
    unlink($path1);
} else {
    echo "Warning! This is not file!";
}