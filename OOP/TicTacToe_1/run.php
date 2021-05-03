<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TicTacToe</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
include "autoLoad.php";

$tictac = new TicTac();
$tictac->init(3)->putCross(1,1)->putZero(2,0);

$map = new Map();
echo $map->setMap($tictac->getMap())->getHtmlTable();

?>




</body>
</html>