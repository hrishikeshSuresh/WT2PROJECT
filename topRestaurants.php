<?php
	$str = file_get_contents('topRestaurants.json');
	$json = json_decode($str, true);
	// echo '<pre>' . print_r($json, true) . '</pre>'
	echo print $str;
?>