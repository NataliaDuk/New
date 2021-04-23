<?php
$a1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r($a1);

array_walk($a1, function (&$item, $key, $sp) {
    $item = "$key$sp $item";
}, "=");
print_r($a1);

$zarplata = [
    ["Иванов", 1000],
    ["Петров", 800],
    ["Сидоров", 900]
];

array_walk($zarplata, function (&$item) {
    if ($item[1] < 900) {
        $item[1] *= 2;
    }
});
print_r($zarplata);

$zarplata = [
    ["Иванов", 1000],
    ["Петров", 800],
    ["Сидоров", 900]
];
foreach ($zarplata as &$value) {
    if ($value[1] < 900) {
        $value[1] *= 2;
    }
}
print_r($zarplata);


