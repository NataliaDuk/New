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

$sql = "SELECT * FROM `vedomost`";
/** @var mysqli $link */
$result = mysqli_query($link, $sql);

echo "<table class='table table-success table-striped'>" .
    "<tr><th>Имя</th><th>Зарплата</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td> $row[name]</td><td>$row[zp]</td></tr>";
}
echo "</table>";
?>
<a href="showAdd.php" class="btn btn-primary">Добавить</a>
</body>
</html>

