<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text</title>
</head>

<body>
    <h1> 1. Заменить в тексте слово дурак на слово ай-яй-яй.</h1>
    <p><i>Текст: <i>Умный молчит, когда дурак ворчит. Умный научит, дурак наскучит.<i></p>
    <p><b>Результат:<b></p>

    <?php
    $str = "Умный молчит, когда дурак ворчит. Умный научит, дурак наскучит.";
    $pat = "/дурак/iu";
    $rep = "ай-яй-яй";
    $str1 = preg_replace($pat, $rep, $str);
    echo $str1;
    ?>

    <h1> 2. Подсчитать сколько раз в тексте встречается слово привет.</h1>
    <p><i>Текст: <i>Привет Маша. Привет Саша. Привет Даша. Привет Наташа.<i></p>
    
    <?php
    $str2 = 'Привет Маша. Привет Саша. Привет Даша. Привет Наташа.';
     echo "<b>Результат: <b>" . preg_match_all('/привет/iu', $str2, $m);
   
    ?>
</body>

</html>