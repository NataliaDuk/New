<?php
spl_autoload_register(function ($class) {
include "Clases/$class.php";
});