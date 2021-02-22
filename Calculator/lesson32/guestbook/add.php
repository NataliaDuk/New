<?php
$data = json_decode(file_get_contents("data.json"));

$data[] = ["msg" => $_POST["msg"], "name" => $_POST["name"], $_POST["time"]];
file_put_contents("data.json", json_encode($data));
$_POST["time"]=$time;
header("Location: main.php");


?>