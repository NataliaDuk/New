<?php

include_once "Textarea.php";

$textarea = new Textarea();
echo $textarea
        ->setCols(50)
        ->setRows(6)
        ->setStyle('border:1px solid green')
        ->setInnerText("элемент формы для создания области, в которую можно вводить несколько строк текста")
        ->html();
