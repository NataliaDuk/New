<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $x = 10;
    $b=10;
    $c=0.13;
    // $y=floor($x/$c)*floor($b/$c); округление в меньшую сторону
     $y=ceil($x/$c)*ceil($b/$c); //округление в большую сторону
     
    echo $y;

    ?>
</body>

</html>