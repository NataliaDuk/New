<?php


 $f=file_get_contents ("https://www.php.net/manual/ru/indexes.functions.php");

 echo substr_count($f, '<a href="function');

 ?>
