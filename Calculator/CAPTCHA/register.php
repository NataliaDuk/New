<?php   
    session_start();
    $inputNumber=preg_replace(
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
    $inputNumber2=preg_replace('/[ ]/', '', $inputNumber);
    $inputNumber2=$_POST["captcha"];//ответ пользователя
        if ($inputNumber2==$_SESSION['rand_code']&&($inputNumber2 !="")) {
       echo "Капча введена правильно";
    } else {
        echo "Капча введена не правильно";
    }
?>