<?php
	header("Content-type:text/xml");
	$news = file_get_contents("recipes.xml");
	echo $news;
?>