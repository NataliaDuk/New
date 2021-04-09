<!--showAdd.php-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form action="add.php" method="post">
    <?php
    include_once "connect.php";
    /**
     * @var mysqli $link соединение с базой данных
     * @var array $config конфигурационные данные из файла config
     */
    $fields = fieldsList($link, $config["mysql"]["table"]);//вызов функции,которая возвращает список полей из таблицы базы данных
    foreach ($fields as $field) {
        ?>
        <div class="input-group mb-3">
            <input type="text" class="form-control" name="<?= $field ?>" placeholder="<?= $field ?>"> //генерируются поля формы, соответствующие полям таблицы базы данных
        </div>
        <?php
    }
    ?>

    <input type="submit" class="btn btn-primary" value="Добавить">
</form>

</body>
</html>