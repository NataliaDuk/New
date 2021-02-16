<?php
move_uploaded_file($_FILES["userfile"]["tmp_name"], "files\\" . $_FILES["userfile"]["name"]);

$dir = array_diff(scandir("files\\"), ['..', '.']);

foreach ($dir as $value) {
    echo "<a href='files\\$value'>$value</a><br>";
}