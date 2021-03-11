<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a=4;
$x=10;
$b=5;
$y=pow($a*log($b*$x), 1/3)/(1+pow(sin($a*$x), 2));
    echo $y;
    
    ?>
</body>
</html>