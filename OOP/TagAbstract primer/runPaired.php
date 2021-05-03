<?php
include 'autoload.php';

$bdo = new Bdo();
echo $bdo
        ->setInnerText("Текст инвертируется и отображается справа налево. Иными словами,
  последнюю букву в предложении браузер покажет первой, и наоборот, первую букву в тексте — последней.")
        ->setDir("rtl")
        ->setStyle("font-weight:bold;text-align:center;")
        ->html() . "\n";

echo "<br>";
echo "<br>";


$mark = new Mark();
echo $mark
//        ->setStyle("font-size:24px;color:red;")
        ->setInnerText("Предназначен для акцентирования текста. Браузеры отображают такой текст курсивным начертанием.")
        ->html() . "\n";

echo "<br>";
echo "<br>";


$marquee = new Marquee();
echo $marquee
    ->setBehavior("alternate")
    ->setStyle("background-color:#c0c0c0;")
    ->setInnerText("Устанавливает способ движения содержимого внутри элемента")
    ->html();
?>
