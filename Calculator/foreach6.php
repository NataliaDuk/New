<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $arr=[1,2,3,4,5,6,7,8,9,10];
    foreach ($arr as $value) {
        if ($value==5) {
            break;
        }
        echo $value;
    }
    echo "<br>";

    $arr=[1,2,3,4,5,6,7,8,9,10];
    foreach ($arr as $value) {
        if ($value==5) {
            continue;
        }
        echo $value;
    }



    
    ?>





</body>

</html>