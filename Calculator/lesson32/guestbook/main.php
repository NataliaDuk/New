<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "function.php";
    $data = json_decode(file_get_contents("data.json"), true);
    foreach ($data as $row) {
        echo smail($row["msg"]). $row["name"] . "<br>\n";
    }
    ?>
    <form action="add.php" method="post">
        <textarea name="msg" cols="30" rows="10"></textarea><br>
        <input type="text" name="name"><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>