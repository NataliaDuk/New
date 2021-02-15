<?php
session_start();
$number1 = rand(0, 9);
$number2 = rand(0, 9);
$numbers="$number1$number2";
$_SESSION['captcha1']= $numbers;

$numbers2 = [
    "один" => 1,
    "два" => 2,
    "три" => 3,
    "четыре" => 4,
    "пять" => 5,
    "шесть" => 6,
    "семь" => 7,
    "восемь" => 8,
    "девять" => 9,
    "десять" => 10

];

//    echo $inputNumber=preg_replace(
//         [
//             "/\bноль/iu",
//             "/\bодин/iu",
//             "/\bдва/iu",
//             "/\bтри/iu",
//             "/\bчетыре/iu",
//             "/\bпять/iu",
//             "/\bшесть/iu",
//             "/\bсемь/iu",
//             "/\bвосемь/iu",
//             "/\bдевять/iu"
//         ],
//         [
//             "0",
//             "1",
//             "2",
//             "3",
//             "4",
//             "5",
//             "6",
//             "7",
//             "8",
//             "9"
//         ],
//         $_POST["captcha"]
//     );
    echo $inputNumber2=preg_replace('/[ ]/', '', $numbers2);
   
    session_start();
    $_POST["captcha"]=$inputNumber2;
    echo $_SESSION['captcha1'];
    
        if ($_POST["captcha"]==$_SESSION['captcha1']) {
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