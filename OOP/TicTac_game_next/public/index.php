<?php
session_start();
include '../autoload.php';

if (isset($_GET['newgame'])) {
    unset($_SESSION['map']);
    unset($_SESSION['message']);
}
//use Third\TicTac as TicTac;
$tictac = new Third\TicTac(3);
use First\Ai as Ai;
$ai = new AI($tictac);

if (isset($_SESSION['map'])) {
    $tictac->setMap($_SESSION['map']);
}


if (isset($_GET['i']) && isset($_GET['j'])) {
    if (!$tictac->checkWinner()) {
        $tictac->putCross($_GET['i'], $_GET['j']);
        if ($tictac->checkWinner()) {
            $_SESSION['message'] = "Выиграли крестики!";
            $add = json_decode(file_get_contents('data.json'), TRUE);
            $add[] = ['message' => $_SESSION['message'], 'time' => date("H:i:s d-M-Y ")];
            file_put_contents('data.json', json_encode($add, JSON_UNESCAPED_UNICODE));
        }
    }


    if (!$tictac->checkWinner()) {
        $ai->moveZero();
        if ($tictac->checkWinner()) {
            $_SESSION['message'] = "Выиграли нолики!";
            $add = json_decode(file_get_contents('data.json'), TRUE);
            $add[] = ['message' => $_SESSION['message'], 'time' => date("H:i:s d-M-Y ")];
            file_put_contents('data.json', json_encode($add, JSON_UNESCAPED_UNICODE));
        }
    }
}

if (!$tictac->checkWinner() && $tictac->countEmptyCells() == 0) {
    $_SESSION['message'] = "Ничья!";
    $add = json_decode(file_get_contents('data.json'), TRUE);
    $add[] = ['message' => $_SESSION['message'], 'time' => date("H:i:s d-M-Y ")];
    file_put_contents('data.json', json_encode($add, JSON_UNESCAPED_UNICODE));
}
$_SESSION['map'] = $tictac->getMap();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <header class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="text-center">КРЕСТИКИ НОЛИКИ</h1><br>
        </header>
    </div>
    <div class="row">
        <nav class="col-sm-12 col-md-12 col-lg-12">
            <h2 class="text-center"><?= $_SESSION['message'] ?? "" ?></h2>
            <?= (new Second\Map($tictac->getMap()))->getHtmlTable()."<br>"?>
        </nav>
    </div>
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-12">
            <h1 class="text-center"><a href="?newgame">Новая Игра</a></h1><br>
        </section>
    </div>
</div>

</body>
</html>
