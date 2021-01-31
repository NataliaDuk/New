<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questbook</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box">
    <h2>My guestbook</h2>
    <form method="POST" action="?">
        Name: <input type="text" name="name">
        <span class="error">* </span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website">
        <span class="error">* <?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <span class="error">* <?php echo $commentErr; ?></span>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Man") echo "checked"; ?> value="Man">Man
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "Woman") echo "checked"; ?> value="Woman">Woman
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </form>
    <table>
        <caption>
            <h2>My guest<h2>
        </caption>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Website</th>
            <th>Comment</th>
            <th>Gender</th>
            <th>Date</th>
            <th>Time</th>
        </tr>
        <?php
        $myQuest = file_get_contents("quest.txt");
        $records = explode("<----->", $myQuest);
        foreach ($records as $rec) {
            $row = explode("\n", trim($rec));
            echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td>
            <td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td></tr>";
        }
        ?>
    </table>
    </div>
</body>

</html>