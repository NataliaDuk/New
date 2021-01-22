<?php
$html = file_get_contents("https://www.onliner.by/");

echo substr_count($html, "onliner");
echo "\n";
echo substr_count($html, "онлайнер");
