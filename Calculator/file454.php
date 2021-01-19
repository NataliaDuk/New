<?php

echo $c=file_get_contents ("file_s.txt");

// echo ++$c;
 file_put_contents ("file_s.txt", ++$c);

?>