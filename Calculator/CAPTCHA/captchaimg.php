<?php
	session_start();
	$number1=rand(1,9);
	$number2=rand(1,9);
	
	$_SESSION['rand_code'] = "$number1$number2";

	$dir = "fonts/";

	$image = imagecreatetruecolor(200, 60);
	// $black = imagecolorallocate($image, 0, 0, 0);
	$color = imagecolorallocate($image, 200, 100, 90);
	$white = imagecolorallocate($image, 255, 255, 255);

	imagefilledrectangle($image,0,0,399,99,$white);
	imagettftext ($image, 30, 10, 10, 40, $color, $dir."verdana.ttf", $_SESSION['rand_code']);

	// header("Content-type: image/png");
	imagepng($image);
?>