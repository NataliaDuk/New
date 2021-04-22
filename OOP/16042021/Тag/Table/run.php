<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php

    include_once "Table.php";

$tag = new Table();
echo $tag
    ->setHeaders(['Имя', 'Фамилия', 'Номер телефона'])
    ->setClass('table table-striped border-primary')
    ->setData([
        ['Миша', 'Фролов', '635696'],
        ['Саша', 'Федоров', '689742']])
    ->html();
?>
</body>
</html>

