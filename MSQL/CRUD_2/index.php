<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row align-items-start">
        <div class="col">

        </div>
        <div class="col-6">
            <h1>Записи базы данных</h1>
            <?php
            /**
             * @var mysqli $link соединение с базой данных
             * @var array $config конфигурационные данные из файла config
             */

            include_once "connect.php";// подключаем файл connect для соединения с базой данных

            $fields = fieldsList($link, $config["mysql"]["table"]); // вызываем функцию, чтобы получить список полей


            $sql = "SELECT * FROM `{$config['mysql']['table']}`"; // имя таблицы передается из файла config


            $result = mysqli_query($link, $sql); // запрос к базе данных
            echo "<table class='table table-striped border border-2 border-success'>";

            $headers = "";                 // формируем строку с заголовками таблицы
            //создаем цикл, который выводит заголовки таблицы
            foreach ($fields as $field) {
                $headers .= "<th class='table-success'>$field</th>";
            }

            //$headers = "<th>" . implode("</th> <th>", $fields) . "</th>"; // альтернатива строк с 30 по 33

            echo "$headers <th class='table-success'>удалить</th> <th class='table-success'>редактировать</th>"; //добавляем заголовки "удалить" и "редактировать"
            //создаем цикл, который выводит содержимое таблицы в автоматическом режиме
            while ($row = mysqli_fetch_assoc($result)) {

                $tableRow = "";                       // формируем строку с данными из таблицы
                foreach ($fields as $field) {
                    $tableRow .= "<td>$row[$field]</td>";
                }
                echo "<tr> $tableRow" .
                    // добавляем кнопки удалить и редактировать в строку таблицы
                    "<td> <a href='delete.php?id=$row[id]'> ❌ </a> </td><td><a href='showEdit.php?id=$row[id]'>🖊️</td></tr>";
            }
            echo "</table>";
            ?>
            <a href="showAdd.php" class="btn btn-success">Добавить</a>
        </div>
        <div class="col">

        </div>
    </div>

</body>
</html>