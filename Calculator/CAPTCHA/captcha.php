<?php
$number1 = rand(0, 9);
$number2 = rand(0, 9);
$numbers = "$number1$number2";
$input = $_POST["captcha"];

   echo $inputNumber=preg_replace(
        [
            "/\bноль([ ]?+)/iu",
            "/\bодин([ ]?+)/iu",
            "/\bдва([ ]?+)/iu",
            "/\bтри([ ]?+)/iu",
            "/\bчетыре([ ]?+)/iu",
            "/\bпять([ ]?+)/iu",
            "/\bшесть([ ]?+)/iu",
            "/\bсемь([ ]?+)/iu",
            "/\bвосемь([ ]?+)/iu",
            "/\bдевять([ ]?+)/iu"
        ],
        [
            0,
            1,
            2,
            3,
            4,
            5,
            6,
            7,
            8,
            9
        ],
        $input
    );
    
    if ("$inputNumber"=="$numbers") {
       echo "ok";
    } else {
        echo "error";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style75.css">
</head>

<body>

    <h1>1.Скрипт капча</h1>
    <form class="meny1" method="post" action="">
        <span><?php echo "$numbers" ?></span><br>
        <input type="text" name="captcha"><br><br>
        <input type="submit" value="Отправить"><br><br>
      
    </form>
    <?php
    
    
    ?>
    
</body>

</html>