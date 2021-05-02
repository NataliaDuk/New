<?php
spl_autoload_register(function ($class) {
    include "Classes/$class.php";
});