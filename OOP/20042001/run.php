<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
spl_autoload_register(function ($class) {
    include "ClassTable/$class.php";
});

$tag = new Table();
echo $tag
    ->setHeaders(['Имя', 'Фамилия', 'Отчество'])
    ->setClass('table table-success table-striped')
    ->setData([
        ['Петя', 'Вася', 'Ира'],
        ['Петя', 'Вася', 'Ира']
    ])
    ->html();
?>
</body>
</html>

