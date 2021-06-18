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
<?php
include "vendor/autoload.php";

$table = new W1020\HTML\Table();

$data = [
    ["id" => 1, "name" => "Иванов"],
    ["id" => 2, "name" => "Петров"],
    ["id" => 3, "name" => "Сидоров"]
];

echo $table
    ->setData($data)
    ->addColumn(fn($v) => "<a href='?id=$v[id]'>Удалить</a>")
    ->setClass("table table-dark table-striped")
    ->html();
$pagination = new W1020\HTML\Pagination();
echo $pagination->setPageCount(3)->setActivePage(1)->html();
?>
</body>
</html>