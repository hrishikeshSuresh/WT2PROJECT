<?php
	extract($_GET);

	$file = fopen("topRestaurants.json","w");
	echo fwrite($file,"$fc");
	fclose($file);
?>