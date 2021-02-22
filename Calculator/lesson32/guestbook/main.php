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
       
    }
    // echo months ($row["time"]) ."<br>\n";
    // foreach ($data as $row1) {
    //     echo months ($row1["time"]) ."<br>\n";
       
    // } 
    // date(".md.Y");
    // $months = [".01." => "января", ".02." => "февраля", 
    // ".03." => "марта", ".04." => "апреля", ".05." => "мая", ".06." => "июня", 
    // ".07." => "июля", ".08." => "августа", ".09." => "сентября",
    // ".10." => "октября", ".11." => "ноября", ".12." => "декабря"];
    // $m = date(".m."); //для замены
    // $time=str_replace($m, " ".$months[$m]." ", $time);
    // foreach ($data as $row) {
    //     echo months ($row["msg"]). $time. $row["name"] . "<br>\n";
    // }
   

    ?>
    <form action="add.php" method="post">
        <textarea name="msg" cols="60" rows="5"></textarea><br>
        <input type="text" name="name"><br>
        <input type="date" name="time"><br>
        <input type="submit" value="ok">
    </form>
</body>

</html>