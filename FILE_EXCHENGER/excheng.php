<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
rsort($dir);
foreach ($dir as $value) {
    preg_match_all('/^.*\.(.*?)$/iu', $value, $matchs);
    $ext = in_array($matchs[1][0], ['docx', 'jpg', 'pdf', 'xls', 'php', 'html','txt', ]) ? $matchs[1][0] : 'default';
    echo "<a href='files\\$value'>$value</a>" . "<img height='30px' weight='50px' src='ikons/$ext.png'><br>\n"; 
}
?>