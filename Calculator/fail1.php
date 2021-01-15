<?php
$fp = fopen("file.txt", "w+");
fwrite($fp, "Test");
fclose($fp);

?>
