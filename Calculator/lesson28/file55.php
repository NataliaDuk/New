<?php
$ret = file_get_contents('https://coronavirus-monitor.info/country/belarus/');

	echo "Количество слов covid ";
	echo preg_match_all('/\bcovid\b/iu', $ret, $str);


	