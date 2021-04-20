<?php
include_once "TagOne.php";
include_once "Br.php";
include_once "Input.php";
include_once "Textarea.php";
include_once "TagTable.php";
include_once "Th.php";
include_once "Td.php";


$br = new Br();
echo $br
        ->setInnerTextA("Текст")
        ->setType("")
        ->setInnerTextB("Текст после переноса")
        ->html() . "<br>";

$input = new Input();
echo $input
        ->setInnerTextA("")
        ->setType("text")
        ->setInnerTextB("")
        ->html() . "<br>";
echo $input
        ->setInnerTextA("")
        ->setType("password")
        ->setInnerTextB("")
        ->html() . "<br>";
echo $input
        ->setInnerTextA("")
        ->setType("submit")
        ->setInnerTextB("")
        ->html() . "<br><br>";
$textarea = new Textarea();
echo $textarea
        ->setCols(50)
        ->setRows(6)
        ->setStyle('border:1px solid green')
        ->setInnerText("элемент формы для создания области, в которую можно вводить несколько строк текста")
        ->html() . "<br><br>";
//$table = new Th();
//echo $table
//    ->setData(['Номер', 'Имя', 'Фамиля', 'Телефон'])
//    ->html();
//$table = new Td();
//echo $table
//    ->setData(['1', 'Лена', 'Иванова', '626262'])
//    ->html();
//echo $table
//    ->setData(['2', 'Саша', 'Петров', '656565'])
//    ->html();
//echo $table
//    ->setData(['3', 'Маша', 'Печкина', '666666'])
//    ->html();