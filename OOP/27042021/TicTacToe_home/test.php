<?php

include "autoLoad.php";
include "unittest.php";

$tictac = new TicTac();
//print_r($tictac
//    ->init(2)
//    ->putCross(1,1)
//    ->getMap()
//);

test(
    $tictac->init(2)->getMap(),
    [
        ["", ""],
        ["", ""]
    ]
);

test(
    $tictac->init(3)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", ""]
    ]
);
test(
    $tictac->init(1)->getMap(),
    [
        [""]

    ]
);
test(
    $tictac->init(3)->putCross(1,2)->getMap(),
    [
        ["", "", ""],
        ["", "", "X"],
        ["", "", ""]
    ]
);
test(
    $tictac->init(3)->putCross(2,2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "X"]
    ]
);
test(
    $tictac->init(3)->putZero(2,2)->getMap(),
    [
        ["", "", ""],
        ["", "", ""],
        ["", "", "O"]
    ]
);
test(
    $tictac->init(3)->putZero(1,2)->getMap(),
    [
        ["", "", ""],
        ["", "", "O"],
        ["", "", ""]
    ]
);