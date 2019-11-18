<?php
session_start();
?>
<html>
<head>
  <title></title>
<link  rel="stylesheet" type="text/css" href="Base.css">
<link  rel="stylesheet" type="text/css" href="../HomePage/home_page.css">
<link rel="stylesheet" type="text/css" href="basepage.css" />
<link  rel="stylesheet" type="text/css" href="MegaMenu.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#4f4d4f">

<div id='Title' style="z-index:1;">
<ul>
<li><img src="Logo.png" alt="icon" style="float:left; width:55px; height:70px;box-shadow:5px 5px" /></li>
<li> <a href="Base_Page.php" target="_self" style="padding:20;font-size:20pt;"> CRITICS.com</a></li>
<li style="margin-left:40px;">
  <div class="dropdown">
  <button class="dropbtn"><a href="../Database/Search_Filter.php" style="font-size:14pt;padding:0px;"> Browse</a>

  </button>
  <div class="dropdown-content">
   <div class="header">
     <h2>Your TV Shows and Movies List</h2>
   </div>
   <div class="row">
     <div class="column">
       <h3>TV Shows</h3>
         <a href="../Top/TopTVShows/Top_Shows.php">Top TV Shows</a>
         <a href="#">Most Popular on Critics.com</a>
         <a href="#">Episodic Reviews</a>
     </div>
     <div class="column">
       <h3>Movies</h3>
       <a href="../Top/TopMovies/Top_Movies.php">IMDB Top 100 Movies</a>
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
  </div>

</li>
<li style="margin-left:40px;"> <a href="../HomePage/Home_Page.php" target="_self" style="padding:20;font-size:14pt;padding-bottom:28;"> Home</a></li>
<li style="margin-left:40px;"> <a href="../LoginPage/Login.php" target = "_blank" style="padding:20;font-size:14pt;padding-bottom:28;"> Login</a></li>
<li style="margin-left:40px;"> <a href="#" target = "_blank" style="padding:20;font-size:14pt;padding-bottom:28;"><?php if(isset($_SESSION['username'])){echo "Welcome ".$_SESSION['username'];}?></a></li>
</ul>
</div>


<div class="slideshow-container" >

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="IT.jpg" style="width:100%;height:500;">
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="WFTPOTA.jpg" style="width:100%;height:500;">
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="kingsman-the-golden-circle.jpg" style="width:100%;height:500;">
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="the-inhumans.jpg" style="width:100%;height:500;">
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="the--hitmans--bodyguard.jpg" style="width:100%;height:500;">
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 6</div>
  <img src="greys-anatomy-season-14.jpg" style="width:100%;height:500;">
</div>


<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
</div>
</div>

<div id="Search_Bar">
  <img style="margin-top:80;margin-left:600;border-radius:25px;" src="Capture.JPG" />
  <div style="position:absolute;top:850;left:350">
<form action="link.php" method="post" id="form">
  <input id="Searching" type="text" name="search" placeholder="Search.."  list="movies">
  <input type="submit" value="" class="search" id="button-holder">
</form>
</div>
<div>
  <a href="../LoginPage/Login.php" target="_self" style="text-decoration:none;"><button type="button" class="button" style="position:absolute;top:950;left:900;">Register Here if new!</button></a>
</div>
</div>
<datalist id="movies">
  <option value="Kingsman">
  <option value="Dictator">
  <option value="Conjuring">
  <option value="Game Of Thrones">
<option value="Family Guy">
  <option value="Stranger Things">
  <option value="Breaking Bad">
  <option value="Greys Anatomy">
</datalist>

<div id="Footer">
   <p style="color:white;text-align:center;font-size:20px;">Rate Our Website!</p>
   <form id="ratingsForm">
   	<div class="stars">
   		<input type="radio" name="star" class="star-1" id="star-1" />
   		<label class="star-1" for="star-1">1</label>
   		<input type="radio" name="star" class="star-2" id="star-2" />
   		<label class="star-2" for="star-2">2</label>
   		<input type="radio" name="star" class="star-3" id="star-3" />
   		<label class="star-3" for="star-3">3</label>
   		<input type="radio" name="star" class="star-4" id="star-4" />
   		<label class="star-4" for="star-4">4</label>
   		<input type="radio" name="star" class="star-5" id="star-5" />
   		<label class="star-5" for="star-5">5</label>
   		<span></span>
   	</div>
   </form>
</div>
<div class = "color2">
  <a href="#" class="fa fa-facebook"></a>
  <a href="#" class="fa fa-twitter"></a>
  <a href="#" class="fa fa-google"></a>
  <a href="#" class="fa fa-linkedin"></a>
</div>



<script>

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

</script>


</body>
</html>
