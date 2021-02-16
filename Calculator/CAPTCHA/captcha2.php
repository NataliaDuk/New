<?php
   echo $inputNumber=preg_replace(
        [
            "/\bноль/iu",
            "/\bодин/iu",
            "/\bдва/iu",
            "/\bтри/iu",
            "/\bчетыре/iu",
            "/\bпять/iu",
            "/\bшесть/iu",
            "/\bсемь/iu",
            "/\bвосемь/iu",
            "/\bдевять/iu"
        ],
        [
            "0",
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9"
        ],
        $_POST["captcha"]
    );
    echo $inputNumber2=preg_replace('/[ ]/', '', $inputNumber);
   
    session_start();
    $inputNumber2=$_POST["captcha"];//ответ пользователя
        if ($inputNumber2==$_SESSION['captcha1']&&($captcha !="")) {
       echo "Капча введена правильно";
    } else {
        echo "Капча введена не правильно";
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

   
    <form class="meny1" method="post" action="">
    <h1>1.Введите код с картинки</h1>
        <img src="captchaimg.php" alt="" />
        <input type="text" name="captcha"><br><br>
        <input type="submit" value="Регистрация"><br><br>
      
    </form>
    
    
</body>

</html>