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
            <?php
            include_once "connect.php";

            $sql = "SELECT * FROM `opros`";
            /** @var mysqli $link */
            $result = mysqli_query($link, $sql);

            echo "<table class='table table-light table-hover table-bordered border-primary table-striped'>" .
                "<tr><th>City</th><th>Email</th><th>Gender</th><th>Age</th><th>Удалить</th><th>Редактировать</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td> $row[City]</td><td>$row[Email]</td><td>$row[Gender]</td><td>$row[Age]</td><td><a href='delete.php?id=$row[id]'> ❌</a></td><td><a href='showEdit.php?id=$row[id]'>🖊️</a></td></tr>";
            }
            echo "</table>";
            ?>
            <a href="showAdd.php" class="btn btn-primary">Добавить</a>
        </div>
        <div class="col">

        </div>
    </div>

</body>
</html>

