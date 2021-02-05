<?php
$str = $_POST["name"];
echo preg_replace(
    [
        "/:-?\)/iu",
        "/:-?\(/iu",
        "/:P/iu",
        "/:-\*/iu"
    ],
    [
        '😍',
        "😍",
        "😍",
        "😍"
    ],
    $str);