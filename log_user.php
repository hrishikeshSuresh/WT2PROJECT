<?php session_start() ?>

<html>
<head>
	<title></title>
</head>
<body>

<?php
	$uname = $_POST["uname"];
	$postpass = $_POST["pass"];
	if(!isset($uname) || !isset($postpass))
	{
		;
	}

	$myfile = $uname."_pass.txt";
	$exists = file_exists($myfile);
	if($exists)
	{
		$file = $myfile;
		$handle = fopen($file,'r');
		$password = fread($handle, filesize($file));
		fclose($handle);
	}

	if($exists && ($postpass == $password))
	{
		$_SESSION['user'] = $uname;
		$_SESSION['logged'] = 'yes';
		$_SESSION['password'] = $password;
		echo "<script> window.location.href = 'index.php';</script>";
	}
	else
	{

		echo "<script>alert('Wrong username or password . If you have not created an account please sign-Up!!')</script>";
		echo "<script> window.location.href = 'login.html';</script>";
	}

?>

</body>
</html>