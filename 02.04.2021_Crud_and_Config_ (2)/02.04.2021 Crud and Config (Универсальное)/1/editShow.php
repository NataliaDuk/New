<!DOCTYPE html>
<!-- editShow.php -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    /**
     * @var mysqli $link соединение с базой данных
     * @var array $config конфигурационные данные из файла config
     */

    include_once "connect.php";
    $sql = "SELECT * FROM `{$config['mysql']['table']}` WHERE id = $_GET[id]";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <form action="edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <?php
        $fields = fieldsList($link, $config["mysql"]["table"]);
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
</body>

</html>