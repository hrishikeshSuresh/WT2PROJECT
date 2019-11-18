<?php
session_start();
 ?>

<html>
<head>
  <title></title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <link  rel="stylesheet" type="text/css" href="background_transition.css">
  <link  rel="stylesheet" type="text/css" href="Nav_bar.css">
  <link  rel="stylesheet" type="text/css" href="Side_Nav.css">
  <link  rel="stylesheet" type="text/css" href="style.css">
  <link  rel="stylesheet" type="text/css" href="SlideShow.css">
  <link  rel="stylesheet" type="text/css" href="Main_Card.css">
  <link  rel="stylesheet" type="text/css" href="MegaMenu.css">
  <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Cantata+One' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="background_transition.js"></script>

  <style>
  .one{
    top:17%;
    left:8%;
  }
  .two{
    top:17%;
    left:38%;
  }
  .three{
    top:17%;
    left:68%;
  }
  .four{
    top:66.5%;
    left:8%;
  }
  .five{
    top:66.5%;
    left:38%;
  }
  .six{
    top:66.5%;
    left:68%;
  }
  h1{
    font: 400 40px/1.6 'Pacifico', Georgia, serif;
    background: gray;
    opacity: 0.6;
    border-radius: 25px;
  }
  p{
    font: 400 30px/1.2 'Lobster', Georgia, serif;
  color: red;
  background: gray;
  opacity: 0.6;
  border-radius: 10px;
  }
  </style>
</head>
<body>
  <!--Color Transition-->
  <div id="gradient" />
  <!--Top Nav Bar-->
  <div id='Title' style="z-index:1;">
  <ul>
  <li><img src="Images/Logo.png" alt="icon" style="float:left; width:55px; height:70px;box-shadow:5px 5px" /></li>
  <li> <a href="../BasePage/Base_Page.php" target="_self" style="padding:20;font-size:20pt;"> CRITICS.com</a></li>
  <li> <input id="search" type="text" name="search" placeholder="Search.." list="genres"></li>
  <!--<li style="margin-left:40px;"> <a href="#browse" style="padding:20;font-size:14pt;padding-bottom:28;"> Browse</a></li>-->
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
  <li style="margin-left:40px;"> <a href="Home_Page.php" target="_self" style="padding:20;font-size:14pt;padding-bottom:28;"> Home</a></li>
  <li style="margin-left:40px;"> <a href="../LoginPage/Login.php" target = "_self" style="padding:20;font-size:14pt;padding-bottom:28;"> Login</a></li>
  <li style="margin-left:40px;"> <a href="../LoginPage/Logout.php" target = "_self" style="padding:20;font-size:14pt;padding-bottom:28;"> Logout</a></li>
  <li style="margin-left:40px;"> <a href="#" target = "_self" style="padding:20;font-size:14pt;padding-bottom:28;"><?php if(isset($_SESSION['username'])){echo "Welcome ".$_SESSION['username'];}?></a></li>
  </ul>
  </div>
  <!--Pre-Defined Search List-->
  <datalist id="genres">
    <option value="Action">
    <option value="Drama">
    <option value="Romance">
    <option value="Comedy">
    <option value="Adventure">
    <option value="Bio-pic">
    <option value="Sports">
    <option value="Animation">
    <option value="Documentary">
    <option value="Crime/Thriller">
  </datalist>


<!--Movie cards are added from here-->
<div class="cards">
<h1 style="position:absolute;left:0%;top:0.5%;margin:0;padding:15px;padding-left:528px;padding-right:528px;">MOVIES</h1>
  <h2><p style="position:absolute;left:8%;top:12%;padding:10px;padding-left:100px;padding-right:100px;">ACTION</p></h2>
  <div class="card C1 one" >
    <?php  include("cards/card1.html") ?>
  </div>
  <h2><p style="position:absolute;left:38%;top:12%;padding:10px;padding-left:100px;padding-right:90px;">COMEDY</p></h2>
  <div class="card C2 two" >
    <?php  include("cards/card2.html") ?>
  </div>
  <h2><p style="position:absolute;left:68%;top:12%;padding:10px;padding-left:100px;padding-right:86px;">HORROR</p></h2>
  <div class="card C3 three" >
    <?php  include("cards/card3.html") ?>
  </div>

<!--TV Shows-->
<h1 style="position:absolute;left:0%;top:50%;margin:0;padding:15px;padding-left:528px;padding-right:536px;">TV Shows</h1>
  <h2><p style="position:absolute;left:8%;top:61.5%;padding:10px;padding-left:55px;padding-right:60px;">Fantasy/Drama</p></h2>
  <div class="card C4 four" >
    <?php  include("cards/card4.html") ?>
  </div>
  <h2><p style="position:absolute;left:38%;top:61.5%;padding:10px;padding-left:100px;padding-right:90px;">COMEDY</p></h2>
  <div class="card C5 five" >
    <?php  include("cards/card5.html") ?>
  </div>
  <h2><p style="position:absolute;left:68%;top:61.5%;padding:10px;padding-left:70px;padding-right:66px;">Thriller/Crime</p></h2>
  <div class="card C6 six" >
    <?php  include("cards/card6.html") ?>
  </div>
</div>
<!--Side Navigation Bar-->
  <div id="mySidenav" class="sidenav">
    <a href="../SideNav/About Page/AboutUs2.html" id="about">About</a>
    <a href="#" id="blog">Blog</a>
    <a href="../SideNav/project.php" id="projects">Projects</a>
    <a href="../SideNav/ContactUsPage/contact-form.php" id="contact">Contact</a>
  </div>

</body>
<script src="cards_slideshow/SlideShow1.js"></script>
<script src="cards_slideshow/SlideShow2.js"></script>
<script src="cards_slideshow/SlideShow3.js"></script>
<script src="cards_slideshow/SlideShow4.js"></script>
<script src="cards_slideshow/SlideShow5.js"></script>
<script src="cards_slideshow/SlideShow6.js"></script>
<script>
  function Download(id){
    alert("Downloading "+id+"......");
  }
</script>
</html>
