<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table as htmlTable;
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
$table->setPageSize(3)->setIdName("nomer");
$page = (int)($_GET['page'] ?? 1);
if (isset($_GET['del'])) {
    $table->del($_GET['del']);
    header("Location: ?");
}
if (!empty($_POST)) {
    $table->ins($_POST);
    header("Location: ?");
}

if (isset($_GET['upd'])) {
    $table->upd($_POST['id'], $_POST);
    header("Location: ?");
}

//$htmlTable = new htmlTable();
//$pagination = new Pagination();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<?= (new htmlTable())
    ->setData($table->getPage($page))
    ->addColumn(fn($v)=>"<a href='?del=$v[nomer]'>Удалить</a>")
    ->addColumn(fn($v)=>"<a href='?edit=$v[nomer]'>Редактировать</a>")
    ->setClass("table table-success table-striped")
    ->html() ?>
<!-- <a class="btn btn-primary" href='?'>Добавить</a><br><br>-->
<form action="?" method="post">
<textarea class="form-control" placeholder="fio" name="fio">
</textarea><br>
    <input class="form-control" type="text" placeholder="zp"  name="zp"><br>
    <input class="btn btn-primary mb-3" type="submit" value="Добавить">
</form>

<?= (new Pagination())
    ->setPageCount($table->pageCount())
    ->setActivePage($page)
    ->html() ?>
</body>
</html>