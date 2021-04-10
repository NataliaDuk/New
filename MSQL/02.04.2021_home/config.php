<?php
// создаем массив, содержащий переменные настройки работы с базой данных файл конфиг
$config["mysql"]["host"] = "localhost";//переменная $config, содержит массив со значением "host" равным "localhost"
$config["mysql"]["user"] = "root";
$config["mysql"]["password"] = "root";
$config["mysql"]["bd"] = "crud";//переменная $config, содержит массив со значением "bd" равным "crud", где "crud" это название базы данных
$config["mysql"]["table"] = "vedomost";//переменная $config, содержит массив со значением "table"]" равным "crud", где "vedomost" это название таблицы
//print_r($config);