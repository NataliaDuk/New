<?php
include 'autoload.php';

$img = new Img();
echo $img->setSrc("https://www.imgonline.com.ua/examples/bee-on-daisy.jpg")
    ->setStyle("width:350; height:300;  display: block; margin: 0 auto;")
    ->setAlt('Картінка')
    ->html();

echo "<br>";

$hr = new Hr();
echo $hr->setStyle("border-color: red;")
    ->html();

echo "<br>";

$embed = new Embed();
echo $embed->setSrc("https://www.youtube.com/embed/dQxuYRNbL_M")
    ->setStyle("width:350; height:300;  display: block; margin: 0 auto;")
    ->html();
