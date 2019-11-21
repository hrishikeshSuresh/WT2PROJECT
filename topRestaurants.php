<?php
	// regular fetch
	$str = file_get_contents('topRestaurants.json');
	$json = json_decode($str, true);
	echo print $str;
	/*
	// predictive fetch
	extract($_GET);
	$chunk = 3;
	$pos = $count * $chunk;
	$str = file_get_contents('topRestaurants.json');
	$json = json_decode($str, true);
	$i = 1;
	$newArray = array();
	foreach ($json as $j) {
		if($i == $pos) {
			break;
		}
		array_push($newArray, array($i => $j));
		$i++;
	}
	echo json_encode($newArray);
	*/
?>