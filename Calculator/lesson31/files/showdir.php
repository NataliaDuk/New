<?php
move_uploaded_file($_FILES["userfile"]["tmp_name"], "files\\" . $_FILES["userfile"]["name"]);
header("location: main.php");

?>

