<
<?php
include "autoLoad.php";
$img = new Img();
echo $img
    ->setSrc("image/hello_html.jpg")
    ->setAlt("Золотая рыбка")
    ->setStyle("height: 250px; width: 350px; border: 2px solid red")
    ->html();

$hr = new Hr();

echo $hr
    ->setStyle("border: 2px solid blue;")
    ->html();

$br = new Br();

echo $br
    ->setInnerTextA("текст до переноса")
    ->setInnerTextB("текст после переноса")
    ->html();


$h1 = new H1();
echo $h1
    ->setStyle("color: green")
    ->setInnerText("Заголовок первого уровня")
    ->html();

$p = new P();
echo $p
    ->setInnerText("Для определения абзаца в ORM8-документе используется тег p. При отображении тега p, браузер автоматически вставляет до и после него отступы, отделяя его, таким образом, от других элементов, размер отступов можно изменить с помощью стилей CSS.")
    ->setStyle("color: blue; margin-top: 2em; margin-bottom: 2em;")
    ->html();

$button = new Button();
echo $button
    ->setStyle("vertical-align:middle; color: red; border: 2px solid green")
    ->setType("button")
    ->setInnerText("Кнопка")
    ->html();

?>

