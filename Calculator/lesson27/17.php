<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$ret=file_get_contents('TolstoyLev.txt');
// implode("<br>\r\n", $str);
preg_match_all('/\bсударь\b/iu',$ret, $str);

foreach ($str[0] as $key => $row) {
	echo ($key + 1)  . '.' . $row;
	if ($key < count($str[0]) - 1) {
		echo "\n";
	} 
}
preg_match_all('/\bсудар(.*?\[^ь])\b/iu',$ret, $str1);
foreach ($str1[0] as $key => $row) {
	echo ($key + 1)  . '.' . $row;
	if ($key < count($str1[0]) - 1) {
		echo "\n";
	} 
}
?>
</body>
</html>
