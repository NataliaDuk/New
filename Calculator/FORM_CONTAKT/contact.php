<?php
    if ((!empty($_POST)) && ($_POST["name"] != "") && ($_POST["text"] != "")) {
        $row = "\n<----->\n" .
            $_POST["tel"] . "\n" .
            $_POST["email"] . "\n" .
            $_POST["name"];
            $_POST["url"];
        file_put_contents("contact.txt", $row, FILE_APPEND);
        header("Location: ?");
        die(); 
    }
      ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact_fornm</title>
        <link rel="stylesheet" href="style265.css">
    </head>

    <body>
            <h1>Форма</h1>
            <div class="text">
            <?php
            $data =file_get_contents("contact.txt");
            $records = explode("<----->", $data);
            echo "<table border='1'>";
            foreach ($records as $record) {
                $row = explode("\n", trim($record));
                // print_r($row);
                  echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
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
                    <input type="text" name="text" class="comment"><br>
                    <input type="submit" value="ok" class="input">  
                </form>
            </div>
    </body>
    </html>
   