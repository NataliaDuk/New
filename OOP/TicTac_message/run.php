<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include "autoload.php";

$tictac = new TicTac(3);

$ai = new AI($tictac);
//$ai->moveCross();
//$ai->moveZero();
//$ai->moveCross();
//$ai->moveZero();
//$ai->moveCross();
//$ai->moveZero();
//$ai->moveCross();
//$ai->moveZero();
//$ai->moveCross();

while ($tictac->countEmptyCells() > 0 && !$tictac->checkWinner()) {
    $ai->moveCross();
    if ($tictac->checkWinner()) {
        echo "Победили крестики";
    }
    if (!$tictac->checkWinner()) {
        $ai->moveZero();
        if ($tictac->checkWinner()) {
            echo "Победили нолики";
        }

    }
}
if (!$tictac->checkWinner()) {
    echo "Ничья";
}

//if ($tictac->checkWinner() && $ai->moveCross()) {
//    echo "Победили крестики";
//} elseif ($tictac->checkWinner() && $ai->moveZero()) {
//    echo "Победили нолики";
//} else {
//    echo "Ничья";

/*$tictac
    ->putCross(1, 1)
    ->putZero(0, 2)
    ->putCross(0, 1)
    ->putZero(2, 2)
    ->putCross(1, 2)
    ->putZero(0, 0)
    ->putCross(1, 0);*/

//$tictac->checkWinnerByCol();

$map = new Map();
echo $map
    ->setMap($tictac->getMap())
    ->getHtmlTable();


?>
</body>
</html>