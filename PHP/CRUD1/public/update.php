<?php

use W1020\Table;

include "../vendor/autoload.php";

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook",
    "table" => "ved"
];

$table = new Table($config);

$table->setIdName('nomer')->upd($_POST['nomer'], $_POST);

//print_r($_POST['nomer']);
header("Location: index.php");
