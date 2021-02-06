<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Voina_i_mir</title>
	<link rel="stylesheet" href="style2656.css">
</head>

<body>
<div class="list">
<h1>Роман Война и мир<br><i>Толстой Л.Н.<i></h1>
	<?php
	$ret = file_get_contents('voina-i-mir (1).txt');

	echo "<h2>Количество слов сударь в романе без склонений</h2>";
	preg_match_all('/\bсударь\b/iu', $ret, $str);


	foreach ($str[0] as $key => $row) {
		echo ($key + 1)  . '.' . $row;
		if ($key < count($str[0]) - 1) {
			echo "\n<br>";
		}
	}

	echo "<br><b>Итого:" .count($str[0]). "<b><br>";

	echo "<h2>Варианты слов сударь в романе в склонении</h2>";

	preg_match_all('/\bсудар([^ь]*?)\b/iu', $ret, $str1);
	foreach ($str1[0] as $key => $row) {
		echo ($key + 1)  . '.' . $row;
		if ($key < count($str1[0]) - 1) {
			echo "\n<br>";
		}
	}
	echo "<br><b>Итого:  " . count($str1[0]) . "<b>";
	?>
</div>
</body>

</html>