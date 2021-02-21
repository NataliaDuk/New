<?php
$dir = array_diff(scandir("files\\"), ['..', '.']);
echo "<h1>Список загруженных файлов:</h1>";
foreach ($dir as $value) {
    preg_match_all('/^.*\.(.*?)$/iu', $value, $matchs);
    $ext = in_array($matchs[1][0], ['docx', 'jpg', 'pdf', 'xls', 'php', 'html','txt']) ? $matchs[1][0] : 'default';
    echo "<img height='60px' weight='80px' src='ikons/$ext.png'>" . "<a href='files\\$value'>$value</a> <br>\n"; 
}
?>