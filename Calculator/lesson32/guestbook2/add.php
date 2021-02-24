<?php
$data = json_decode(file_get_contents("data.json"));
$_POST["time"]= $time;
$data[] = ["msg"] => $_POST["msg"], "name" => $_POST["name"], "time" => $_POST["time"]];
file_put_contents("data.json", json_encode($data));

header("Location: main.php");


?>