<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>guestbook</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row align-items-start">
        <div class="col">

<?php
$link = mysqli_connect("Localhost", "root", "root", "guestbook");
//print_r(($_POST));

//if (!empty($_POST)) {
//    $sql = "INSERT INTO `gb` (`message`, `name`) VALUES ('$_POST[message]', '$_POST[name]')";
//    mysqli_query($link, $sql);
//}

$sql = "SELECT* FROM `gb`";
$result = mysqli_query($link, $sql);

echo "<table border='=1' class='table table-bordered border-primary'>";
echo "<tr><th>Сообщение</th><th>ИМЯ</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td> $row[message]</td> <td>$row[name]</td></tr>";

}
mysqli_free_result($result);
mysqli_close($link);
echo "</table>"
?>

<form action="add.php" method="post">

    <h1>Ваш комментарий</h1>
    <textarea cols="50" rows="5" name="message"></textarea><br>
    <h1>Введите Ваше имя</h1>
    <input type="text" name="name"><br>
    <input type="submit" value="ok">

</form>

        </div>
</body>
</html>

