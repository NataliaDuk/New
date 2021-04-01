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
<?php
include_once "connect.php";
//echo $_GET["id"];
$sql = "SELECT * FROM `opros` WHERE id=$_GET[id]";
mysqli_query($link, $sql);
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="row align-items-center">
    <div class="col">

    </div>
    <div class="col">
<form action="edit.php" method="post">

    <input type="hidden" name="id" value="<?= $row["id"] ?>">

    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">City</span>
    <input type="text" name="city" value="<?= $row['City'] ?>">
    </div><br>
    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Email</span>
        <input type="text" name="mail" value="<?= $row["Email"] ?>">
    </div><br>
        <div class="input-group input-group-lg">
            <span class="input-group-text" id="inputGroup-sizing-lg">Gender</span>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="gender" value="<?= $row["Gender"] ?>
                    id="">
            <option selected>Выберите пол</option>
            <option value="1">Мужской</option>
            <option value="2">Женский</option>

        </div><br>
    <div class="input-group input-group-lg">
        <span class="input-group-text" id="inputGroup-sizing-lg">Age</span>
        <input type="text" name="age" value="<?= $row["Age"] ?>">
    </div><br>
    <input type="submit" class="btn btn-primary  btn-lg" value="Сохранить">
</form>
    </div><br>
    <div class="col">

    </div>
</body>
</html>