<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

use W1020\Table;

include "../vendor/autoload.php";

$config = [
    "servername" => "localhost",
    "username" => "root",
    "password" => "root",
    "dbname" => "guestbook",
    "table" => "ved"
];

$table = new Table($config);
$table->setIdName('nomer');
$comments = $table->columnComments();
?>
<form action="index.php?insert" method="post">
    <input type="hidden" class="form-control" name="id" value="<?=$_Get['edit']?>">
    <?php
    foreach ($table->columns() as $column) {
        ?>
        <span><?= $comments[$column] ?></span> <input type="extt" class="form-control" name="<?= $column ?>"><br><br>
        <?php
    }
    ?>
    <input type="submit" value="insert">
</form>
</body>
</html>