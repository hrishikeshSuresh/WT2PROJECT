<?php session_start(); 

if(isset($_SESSION['logged']) && ($_SESSION['logged'] == 'yes'))
	{
		//do nothing
	}

	else
	{
		echo <<<EOF
    <script>
    alert("Sorry! You must be logged in to view this.");
    window.location.href = 'login.html';
    </script>
EOF;
    }
	

$username = $_SESSION['user'];
$password = $_SESSION['password'];
?>

<html>
<head>
	<title>My Profile</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/myprofile.css">
</head>
<body>
	<div class = "navbar" target =_top>
    <a href="index.php"><img src="images/logo_w.png" id="logo"/></img></a>
      <a href="index.php" class="btn">Home</a>
      <a href="movies.html" class="btn">Movies</a>
      <a href="tvshows.html" class="btn">TV Shows</a>
      <a href="myprofile.php" class="btn">My Profile</a>
      <input type="text" name="search" placeholder="Search" class="search_text">
      <a href="#" class="search"><i class="fa fa-search"></i></a>
      <div class="loginBtn">
        <a href="login.html" class="btn" id="login">Log in</a>
        <a href="signup.html" class="btn" id="signup">Sign up</a>
        <a class="btn" href="logout.php" id="logout">Log Out</a>
      </div>
  </div>

  <div id="w">
    <div id="content">
      <h1>My Profile</h1>

      <section id="settings">
        <p>Edit your user settings:</p>
        
        <p class="setting"><span>Username </span><?php echo "$username";?> </p>
        
        <p class="setting"><span>Password </span> <?php echo "$password";?></p>

        <button class="pass danger" id="change_pass">Change Password</button>

        <div id="form_change">
        <form action="password_change.php" method="post">
        	<span style="font-size: 20px;">Enter new password : </span><input type="password" name="new_pass" id="new_pass" required>
        	<br>
        	<br>
        	<input type="submit" value="Submit" class="pass warning">
  		</form>
  		</div>
      </section>
    </div>
  </div>


  <script type="text/javascript">
  	var change_pass_btn = document.getElementById('change_pass');
  	change_pass_btn.addEventListener('click',showBoxes,false);

  	function showBoxes()
  	{
  		var box = document.querySelector('#form_change');
  		box.style.display = 'block';
  		var content = document.querySelector('#content');
  		content.style.height = '420px';
  	}
  </script>
</body>
</html>
