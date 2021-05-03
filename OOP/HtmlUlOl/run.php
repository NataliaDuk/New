<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TableTag</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
<?php
include_once "autoLoad.php";

$tag = new TableTag();
echo $tag
    ->setHeaders(['Фамилия', 'Имя', 'Отчество'])
    ->setClass('table table-striped border-primary')
    ->setData([
        ['Орлов', 'Александр', 'Иванович'],
        ['Сидоров', 'Петр', 'Петрович']
    ])
    ->html();
$ul = new UL();
echo $ul
    ->setData(['Иванов', 'Петров', 'Сидоров'])
    ->setType("square")
    ->html();
echo $ul
    ->setType("circle")
    ->html();

$ol = new OL();
echo $ol
    ->setData(['Иванов', 'Петров', 'Сидоров'])
    ->setType("A")
    ->html();
echo $ol
    ->setType("1")
    ->html();
?>
</body>
</html>
