<?php
//echo $_POST("calc");
preg_match("/(\d)(\+|-|\*|\/|pow)(\d)/iu", $_POST["calc"], $matches);
$a = $matches[1];
$b = $matches[3];
$operation=$matches[2];

echo match ($operation) {
    "+" => $a + $b,
    "-" => $a - $b,
    "*" => $a * $b,
    "/" => $a / $b,
    "pow"=> pow($a,$b),
    default => "Unknown operation"
};

?>