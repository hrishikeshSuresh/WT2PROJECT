<?php
session_start();
	$uname = $_SESSION['user'];
	$pass = $_POST["new_pass"];
	if(!isset($pass))
	{
		;
	}

	$fileName = $uname."_pass.txt";
	file_put_contents($fileName, "");
	$fileHandle = fopen($fileName,'w') or die("can't open file!!");

	fclose($fileHandle);

	$handle = fopen($fileName, 'a');
	fwrite($handle,$_POST['new_pass']);

	fclose($handle);



	echo "<script>alert('Password has been changed successfully! Please login again.')</script>";
session_destroy();
	echo "<script> window.location.href = 'login.html';</script>";
  ?>