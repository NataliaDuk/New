<?php

spl_autoload_register(function ($class) {
    $dirs = ["ClassesUnpaired", "ClassesPaired"];
    foreach ($dirs as $dir) {
        if (file_exists("$dir/$class.php")) {
            include("$dir/$class.php");
        }
    }
});
