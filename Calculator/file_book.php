<?php
    if (!empty($_POST)) {
        $row = "\n<----->\n" .
            $_POST["name"] . "\n" .
            $_POST["email"] . "\n" .
            $_POST["text"];
        file_put_contents("file_guest.txt", $row, FILE_APPEND);
        header("Location: ?");
        die();
    }
  
            $error = "";
     $actionName = $_POST["name"];

  if (!empty($actionName)) 
  {
    $name = trim($name);
   
      
      if (empty($name)) // если не введено имя
      {
        $actionName = "";
        $error = $error."Вы не ввели имя\n";
      }
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
    
            <h1>Гостевая книга</h1>
            <div class="text">
            <?php

            $data =file_get_contents("file_guest.txt");
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
            <div class=ident>
                <form action="?" method="POST">
                    <h2>Введите Ваше имя</h2>
                    <input type="text" name="name">
                    <h2>Введите адрес электронной почты</h2>
                    <input type="text" name="email">
                    <h2>Введите сообщение</h2>
                    <input type="text" name="text">
                    <input type="submit" value="ok">
                </form>
            </div>
            
    </body>

    </html>