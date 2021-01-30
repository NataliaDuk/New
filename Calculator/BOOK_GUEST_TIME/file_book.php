<?php
    if ((!empty($_POST)) && ($_POST["name"] != "") && ($_POST["text"] != "")) {
        $row = "\n<----->\n" .
            $_POST["name"] . "\n" .
            $_POST["email"] . "\n" .
            $_POST["text"]. "\n" .
            $_POST["time"];
        file_put_contents("file_guest.txt", $row, FILE_APPEND);
        header("Location: ?");
        die(); 
    }
      ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style265.css">
    </head>

    <body>
    <img src="7nSh.gif" alt="">
    <h1>Гостевая книга</h1>
            <div class="text">
            
            <?php
            date("d.m.Y");
            $data =file_get_contents("file_guest.txt");
            $records = explode("<----->", $data);
            echo "<table border='1'>";
            foreach ($records as $record) {
                $row = explode("\n", trim($record));
                // print_r($row);
                  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
                  } 
            echo "</table>";
            ?>
            </div>
            <div class="ident">
           
                <form action="?" method="POST">
                    <h2>Введите Ваше имя</h2>
                    <input type="text" name="name" class="user">
                    <h2>Ваш e-mail</h2>
                    <input type="text" name="email" class="mail">
                    <h2>Ваш отзыв</h2>
                    <input type="text" name="text" class="comment">
                    <h2>Дата</h2>
                    <input type="date" name="time">
                    <input type="submit" value="ok" class="input">  
                </form>
            </div>
    </body>
    </html>
   