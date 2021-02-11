<?php
$a = file_get_contents('file56.txt');
echo preg_replace('/\d/', "<img src='$0.jpg'>", $a);
file_put_contents("file56.txt", ($a + 1));

