<?php

$stroka="Alex|Ivan|Olesya|Gennadii|Tanya";

$names = explode("|", $stroka);
foreach ($names as $name) 
    echo "$name "; // в данном случае будут выведены все имена
$newNames = explode("|", $stroka,3);
echo "</br>";
foreach ($newNames as $name)
    echo "$name *"; // в данном случае строка будет разбита на 3 слова

    $stroka = "MoskvaABCPiterABCSochiABCSaratov";
$cities = explode("ABC", $stroka);
list($city1, $city2, $city3, $city4) = $cities; //распределяем по переменным
foreach ($cities as $city) 
    echo "$city "; // будут выведены все города
?>