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
<div class="container">
  <div class="row">
    <div class="col-sm">

    </div>
    <div class="col-6">
    <h2>Форма для редактирования</h2>
        <?php


        use W1020\Table;

        include "../vendor/autoload.php";

        $config = [
            "servername" => "localhost",
            "username" => "root",
            "password" => "root",
            "dbname" => "guestbook",
            "table" => "ved"
        ];

        $table = new Table($config);

        $sql = "SELECT * FROM `ved` WHERE `nomer` = $_GET[ins]";
        $row = $table->runSQL($sql);
        //print_r($row);

        foreach ($row as $res) {
            $result = $res;
        }

        ?>
<form action="update.php" method="post">
    <input type="hidden" name="nomer" value="<?= $result['nomer']?>">
    <input type="text" class="form-control" name="fio" value="<?= $result['fio'] ?>"><br>
    <input type="text" class="form-control" name="zp" value="<?= $result['zp'] ?>"><br>
    <input type="submit" class="btn btn-primary mb-3" value="Редактировать">
</form>

</body>
</html>