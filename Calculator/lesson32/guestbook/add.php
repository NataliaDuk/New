<?php
$data = json_decode(file_get_contents("data.json"));
$months = [1=>" января ", " февраля ", 
    " марта ", " апреля ", " мая ", " июня ", 
    " июля ", " августа ", " сентября ",
    " октября ", " ноября ", " декабря "];
$week=[1=>"понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"];
$time=date("d". $months[date('n')]. "Y(".$week[date('w')].")");
$_POST["time"]= $time;

$data[] = ["msg" => $_POST["msg"], "name" => $_POST["name"], "time" => $_POST["time"]];
file_put_contents("data.json", json_encode($data, JSON_UNESCAPED_UNICODE));

header("Location: main.php");


?>