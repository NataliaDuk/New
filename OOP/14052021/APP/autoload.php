<?php

spl_autoload_register(function ($class) {
    include "APP/$class.php";
});