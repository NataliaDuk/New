<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="POST">
        <input type="date" name="name">
        <input type="submit" value="ok">
    </form>
    <?php
    $date = explode("-", $_POST["qwe"]);
    $year = $date[0];
    $month = $date[1];
    $day = $date[2];
    $second = time() - mktime(0, 0, 0, $month, $day, $year);
    $days = floor($second / (60 * 60 * 24));
    echo $days . " полных суток";
    ?>
</body>

</html>