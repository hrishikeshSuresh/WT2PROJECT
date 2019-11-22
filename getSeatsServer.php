<?php
	extract($_GET);
	
	if($time){	
		//code for checking if text changed
		$last=$time;	
	}
	else{
		$last=null;
	}
	// $oldtime = filemtime("topRestaurants.json");
	$file=fopen("topRestaurants.json","r");
	while(true){
		clearstatcache();
		$new=filemtime("topRestaurants.json");
		if($new>$last){
			$ret=fread($file,filesize("topRestaurants.json")).";".$new;
			echo $ret;
			// $oldtime = $newtime;
			break;
			
		}
		else{
			sleep(5);
			continue;
		}
		
		
	}





?>