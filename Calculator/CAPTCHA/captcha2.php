<?php
session_start();//Начинаем сессию
$number1 = rand(0, 9);//Генерируем случайное  число 
$number2 = rand(0, 9);
$_SESSION['captcha']="$number1$number2";//записываем числа в сессию
$image=imagecreatetruecolor(200,60);//Создаем изображение
$color=imagecolorallocate($image,200,100,90);//Задаем 1-й цвет
$white=imagecolorallocate($image.255.255.255);//Задаем 2-й цвет
imagefilledrectangle($image,0,0,399,99,$white); //Прямоугольник с белым фоном
imagettftext($image,00,10,40,color,"Arial Regular.ttf", "$number1$number2");//Пишем текст
header("Content-type: image/png"); //отсылаем заголовок, что изображение png
imagepng($image);//Выводим изображение

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
    $_SESSION['captcha1']= $numbers;
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