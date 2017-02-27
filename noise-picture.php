<?php
	session_start();
	$img = imageCreateFromJpeg("images/noise.jpg");
	$color = imageColorAllocate($img, 64, 66, 67);
	imageAntiAlias($img, true);
	$nChar = 5;
	$rangStr = substr(md5(uniqid()), 0, $nChar);
	$_SESSION["rangStr"] = $rangStr;

	$x = 20;
	$y = 30;
	$deltaX = 40;

	for ($i=0; $i < $nChar ; $i++) { 
		$size = rand(16, 30);
		$angle = -30 + rand(0, 60);
		imagettftext($img, $size, $angle, $x, $y, $color,"fonts/bellb.ttf", $rangStr{$i});
		$x += $deltaX;
	}
	header("Content-Type: image/jpg");
	imagejpeg($img);
	echo "string";