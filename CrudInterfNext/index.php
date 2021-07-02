<?php
include "vendor/autoload.php";

use APP\JsonTable;
use APP\DB;
use APP\PhpTable;

//$json = new JsonTable("table2.json");
////print_r($json->read());
//
//$json->create(["Name" => "Сидоров", "Salary" => 1500]);
//$json->delete(1);
//$json->update(2, ["Name" =>"Ivan", "Salary"=>1000]);
//$db=new DB(new JsonTable("table3.json"));

// $db= new DB(new PhpTable("table.php"));
// $db->insert(["Name" => "Сидоров", "Salary" => 1500]);
// $db->insert(["Name" => "Orlov", "Salary" => 1200]);
// $db->update(1, ["Name" => "Orlov", "Salary" => 2000]);


$db= new DB(new TxtTable("table.txt"));
$db->insert(["Name" => "Сидоров", "Salary" => 1500]);
$db->insert(["Name" => "Orlov", "Salary" => 1200]);
$db->update(1, ["Name" => "Orlov", "Salary" => 2000]);