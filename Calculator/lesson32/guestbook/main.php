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
    foreach ($data as $row)  {if (!moderator($row["msg"]))
        echo smail($row["msg"])."<br>". $row["name"] ."<br>".$row["time"] ."<br>\n";
        else echo "У нас не ругаются!";
    }
    ?>
    <form action="add.php" method="post">
        <textarea name="msg" cols="60" rows="5"></textarea><br>
        <input type="text" name="name"><br>
        <input type="date" name="time"><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>