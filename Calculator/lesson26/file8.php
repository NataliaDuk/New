<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form  method="POST">
        <input type="date" name="qwe">
        <input type="submit" value="ok">
    </form>
    <?php
    $date = explode("-", $_POST["qwe"]);
    $year = $date[0];
    $month = $date[1];
    $day = $date[2];

  
    $n = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));
    echo  $n;

    ?>
</body>

</html>