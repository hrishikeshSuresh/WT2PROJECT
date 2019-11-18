<?php
session_start();
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<title>Contact us</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="ContactUs.css" />
<script language="JavaScript" src="scripts/gen_validatorv31.js" type="text/javascript"></script>
</head>
<body>
	<div id='Title'>
	<ul>
	<li><img src="Logo.png" alt="icon" style="float:left; width:55px; height:70px;box-shadow:5px 5px" /></li>
	<li> <a href="../../BasePage/Base_Page.php" target="_self" style="padding:20;font-size:20pt;"> CRITICS.com</a></li>
	<li> <input id="search" type="text" name="search" placeholder="Search.." list="genres"></li>
	<li style="margin-left:40px;"> <div class="dropdown">
			<button class="dropbtn"><a href="../../Database/Search_Filter.php" style="font-size:14pt;padding:0px;">Browse</a>
			</button>
			<div class="dropdown-content">
				<div class="header">
					<h2>Your TV Shows and Movies List</h2>
				</div>
				<div class="row">
					<div class="column">
						<h3>TV Shows</h3>
							<a href="../../Top/TopTVShows/Top_Shows.php">Top TV Shows</a>
							<a href="#">Most Popular on Critics.com</a>
							<a href="#">Episodic Reviews</a>
					</div>
					<div class="column">
						<h3>Movies</h3>
						<a href="../../Top/TopMovies/Top_Movies.php">IMDB Top 100 Movies</a>
						<a href="#">Coming Soon to Theaters!!</a>
						<a href="#">Popular Movies</a>
					</div>
					<div class="column news">
						<h3>News</h3>
						<a href="#">Best and Worst</a>
						<a href="#">TV Talk</a>
						<a href="#">Box Office Guru</a>
					</div>
				</div>
			</div>
		</div></li>
	<li style="margin-left:40px;"> <a href="../../HomePage/Home_Page.php" target="_self" style="padding:20;font-size:14pt;padding-bottom:28;"> Home</a></li>
	<li style="margin-left:40px;"> <a href="../../LoginPage/Login.php" target = "_blank" style="padding:20;font-size:14pt;padding-bottom:28;"> Login</a></li>
  <li style="margin-left:40px;"> <a href="#" target = "_self" style="padding:20;font-size:14pt;padding-bottom:28;"><?php if(isset($_SESSION['username'])){echo "Welcome ".$_SESSION['username'];}?></a></li>
	</ul>
	</div>


	<h3 style = "font-size : 28px; color : #009900;">Contact Us</h3>
<div class="container">
<form method="POST" name="contactform" action="contact-form-handler.php">
<p>
<label style = "color : white; font-size : 20px;"> Name </label>
<input type="text" id="fname" name="firstname" placeholder="Your name..">
</p>
<p>
 <label style = "color : white; font-size : 20px;"> Email </label>
<input type="text" id="lname" name="email" placeholder="Your email address..">
</p>
<p>
 <label style = "color : white; font-size : 20px;"> Subject </label>
<input type="text" id="lname" name="subject" placeholder="Write something..">
</p>
<p>
<label style = "color : white; font-size : 20px;">Message:</label> <br>
<textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>
</p>
<input type="submit" value="Submit"><br>
</form>
</div>

<script language="JavaScript">
// Code for validating the form
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email","Please enter a valid email address");
</script>

</body>
</html>
