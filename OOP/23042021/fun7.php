<?php
$a1 = array(1, -2, 3, 4, -5, 6, -7, -8, 9, 10);
print_r($a1);

array_walk($a1, function ($item, $key) {
    echo "$key => $item <br>";
});

array_walk($a1, function ($item) {
    echo $item ** 2 . " <br>";
});

$list = ["Иванов", "Петров", "Сидоров"];
echo "<ol>";
foreach ($list as $value) {
    echo "<li>$value</li>";
}
array_walk($list, function ($li) {
    echo "<li>$li</li>";
});
echo "</ol>";


