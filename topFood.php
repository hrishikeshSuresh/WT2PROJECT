<?php
	// regular fetch
	$str = file_get_contents('topFood.json');
	$json = json_decode($str, true);
	echo print $str;
?>