<!doctype html>
<!--showADD.php-->
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
<div class="container">
    <div class="row align-items-start">
        <div class="col">

        </div>
        <div class="col">
            <h1>Заполните форму:</h1>
            <form action="add1.php" method="post">
                <?php
                include_once "connect.php";// подключаем файл connect для соединения с базой данных
                /**
                 * @var mysqli $link соединение с базой данных
                 * @var array $config конфигурационные данные из файла config
                 */
                $fields = fieldsList($link, $config["mysql"]["table"]);// вызываем функцию, чтобы получить список полей таблицы
                //создаем цикл, который проходит по списку и для каждого элемента генерируем поле ввода
                foreach ($fields as $field) {
                    ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="<?= $field ?>" placeholder="<?= $field ?>">
                    </div>

                    <?php
                }
                ?>
                <input type="submit" class="btn btn-primary" value="Добавить">
            </form>
        </div>
        <div class="col">

        </div>
    </div>

</body>
</html>
