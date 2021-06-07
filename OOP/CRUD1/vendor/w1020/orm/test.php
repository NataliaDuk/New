<?php
include 'vendor/autoload.php';

use W1020\Db;
use W1020\CRUD;
use W1020\Table;

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook",
    "table" => "ved"
];

//$crud = new CRUD($config);
//$crud->setIdName("nomer");
//$table = $crud->get();
//print_r($table);
//
//$crud->del(4);
//$crud->ins(["fio" => "Vova", "zp" => 600]);
//$crud->ins(["fio" => "Ania", "zp" => 350]);
//
//$crud->upd(3, ["fio" => "Olia", "zp" => 150]);

$table = new Table($config);
echo $table->rowCount();
$table->setPageSize(10);
echo $table->pageCount();
print_r($table->getPage(2));

