<?php
	$file=fopen("topRestaurants.json","r");
	$ret=fread($file,filesize("topRestaurants.json"));
	echo $ret;
?>