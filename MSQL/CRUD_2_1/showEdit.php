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
<?php
include_once "connect.php";// подключаем файл connect для соединения с базой данных
//создаем переменную, в которой формируем запрос для выбора полей из таблицы базы данных
$sql = "SELECT * FROM `{$config['mysql']['table']}` WHERE id = $_GET[id]";// имя таблицы передается из файла config
$result = mysqli_query($link, $sql); //создаем переменную, в которой выполняем запрос
$row = mysqli_fetch_assoc($result); // создаем переменную, в которой возвращаем ряд результата запроса в качестве ассоциативного массива
?>
<div class="container">
    <div class="row align-items-start">
        <div class="col">

        </div>
        <div class="col-6">
            <h2>Внесите необходимые изменения</h2>
            <form action="edit.php" method="POST">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <?php
                $fields = fieldsList($link, $config["mysql"]["table"]);// вызываем функцию, чтобы получить список полей
                //создаем цикл, который проходит по списку и для каждого элемента генерируем поле ввода
                foreach ($fields as $field) {
                    ?>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="<?= $field ?>" value="<?= $row[$field] ?>">
                    </div>
                    <?php
                }
                ?>
                <input class="btn btn-primary" type="submit" value="Сохранить">

            </form>
        </div>
        <div class="col">

        </div>


</body>
</html>
