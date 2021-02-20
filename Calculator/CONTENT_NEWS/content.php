<?php
$str = file_get_contents($_POST["url"]);
preg_match_all('/<div class="news-entry">(.*?)<\/div>/isu', $str, $matches);
foreach ($matches[1] as $match) {
    echo $match . "\n";
}
file_put_contents("file.txt",implode("\n",$matches[1]));
?>