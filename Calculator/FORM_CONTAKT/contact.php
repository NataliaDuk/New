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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["tel"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["tel"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
                unset($name);
            }  
        }
    
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                unset($email);
            }
        }
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
                unset($name);
            }  
        }
    
        if (empty($_POST["website"])) {
            $websiteErr = "Website is required";
        } else {
            $website = test_input($_POST["website"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
                unset($website);
            }
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
   