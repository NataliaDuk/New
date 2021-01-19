<?php
// header("Content-Type: text/plain");
// $html=file("https://ru.wikipedia.org/");

// foreach ($html as $key => $value) {
//     echo $key. '|'.$value;
// }
header("Content-Type: text/plain");
readfile("https://ru.wikipedia.org/");

// foreach ($html as $key => $value) {
    
// }
?>