<?php
echo $_POST('calc');
preg_match("/(/d)(\+|-|\*|\/)(/d)/iu", $_POST(calc), $matches);
$a=$mathes[1];
$b=$mathes[3];
$operation=$matches[2];
//switch ($operation) {
//    case "+";
//    $result=$a+$b;
//    break;
//
//    case "-";
//        $result=$a-$b;
//        break;
//    case "*";
//        $result=$a*$b;
//        break;
//    case "/";
//        $result=$a/$b;
//        break;
//default:
//    $result="Неизвестная операция"ж
//}
//echo $result;
echo match ($operation) {
    "+" => $a + $b,
    "-" => $a - $b,
    "*" => $a * $b,
    "/" => $a / $b,
    default => "Unknown operation"
};

