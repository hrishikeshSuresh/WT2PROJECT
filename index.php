<?php session_start(); ?>
<html>
<head>
  <meta charset="utf-8">
  <title>flix.io</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link rel="stylesheet" type="text/css" href="css/indexstyle.css"/>
  <link rel="stylesheet" type="text/css" href="css/card.css" />
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
  <style type="text/css">
		#loader{
			position:absolute;
			left:50%;
			top:50%;
			margin: -75px 0 0 -75px;
			z-index: 1;
			border: 16px solid rgba(178, 177, 166,.1);
			border-top: 16px solid #454140;
			border-radius: 50%;
			width:120px;
			height: 120px;
			animation: spin 2s linear infinite;
		}

		@keyframes spin{
			from {transform: rotate(0deg);}
			to {transform: rotate(360deg);}
		}

		#myDiv{
			display: none;
		}

		.animate-bottom{
			position:relative;
			animation-name: animatebottom;
			animation-duration: 1s;
		}

		@keyframes animatebottom{
			from {bottom: -100px; opacity: 0;}
			to{bottom: 0px; opacity: 1}
		}
  </style>
  

  <script type="text/javascript">
    //for carousel
    var image1=new Image()
    image1.src="images/Avengers.jpg"
    var image2=new Image()
    image2.src="images/ff.jpg"
    var image3=new Image()
    image3.src="images/got.jpg"
    var image4=new Image()
    image4.src="images/american_made.jpg"
  </script>

</head>
<body onload="showMyPage()" style="margin: 0px;">
	<div id="loader"></div>
	<div style="display: none;" id="myDiv" class="animate-bottom">
  <!--Navigation Bar -->
  <div class = "navbar" target =_top>
    <a href="index.php"><img src="images/logo_w.png" id="logo"/></img></a>
      <a href="index.php" class="btn">Home</a>
      <a href="movies.html" class="btn">Movies</a>
      <a href="tvshows.html" class="btn">TV Shows</a>
      <a href="myprofile.php" class="btn">My Profile</a>
      <input type="text" name="search" placeholder="Search" class="search_text">
      <a href="#" class="search"><i class="fa fa-search"  id="searchlogo"></i></a><script type="text/javascript" src = "searchbar.js"></script>
      <div class="loginBtn">
        <a href="login.html" class="btn" id="login">Log in</a>
        <a href="signup.html" class="btn" id="signup">Sign up</a>
        <a class="btn" href="logout.php" id="logout">Log Out</a>
      </div>
  </div>
  <img src="images/Avengers.jpg" name="slide" width="400" height="400" class="slideshow">
  <script type="text/javascript">

      var step=1
      function slideit()
      {
      document.images.slide.src=eval("image"+step+".src");
      if(step<4)
      step++
      else
      step=1
      setTimeout("slideit()",2500)
      }
      slideit()

</script>


<h2>Flix Picks</h2>
<div class="flixpicks" id="flix">

  <div class="card1">
    <img src="images/suits.jpg" alt="Suits Thumbnail" id="suits">
    <div class="container1">
      <h4><b>Suits</b></h4>
    </div>
    <input id="toggle-heart1" type="checkbox">
    <label for="toggle-heart1">❤</label>
    <p>
      Mike Ross, a talented young college dropout, is hired as an associate by Harvey Specter,
      one of New York's best lawyers. They must handle cases while keeping Mike's qualifications a secret.
    </p>
  </div>

  <div class="card2">
    <img src="images/goblet_of_fire.jpg" alt="Goblet Of Fire Thumbnail" id="goblet">
    <div class="container2">
      <h6 ><b>Harry Potter and The Goblet of Fire</b></h6>
    </div>
    <input id="toggle-heart2" type="checkbox">
    <label for="toggle-heart2">❤</label>
    <p>
      In his fourth year at Hogwarts, Harry is unwittingly selected to compete in the inter-school Triwizard Tournament.
      Meanwhile, the wizarding world remains unaware of the ominous rise of dark forces.
    </p>
  </div>
</div>

<h2 id="headingRec" style="left: 550px">Recomended movies and Shows</h2>
<div class="recomendation" id="flix">

  <div class="card1" style="height: 550px;">
    <img src="images/inception.jpg" alt="Suits Thumbnail" id = "img1">
    <div class="container1">
    </div>
  </div>

  <div class="card2" style="height: 550px;">
    <img src="images/got1.jpg" alt="Goblet Of Fire Thumbnail" id="img2">
    <div class="container2">
    </div>
  </div>
</div>


<footer id="footer">
    <p>&copy;2017 flix.io </p>
  </footer>

  </div>

<script src="index_js.js">  </script>

<script type="text/javascript">
		var t;
		function showMyPage()
		{
			t = setTimeout(showPage,1500);
		}

		function showPage()
		{
			document.getElementById("loader").style.display = "none";
			document.getElementById("myDiv").style.display="block";
		}
	</script>

</body>
<?php
if(isset($_SESSION['user']))
	$user = $_SESSION['user'];
  if(isset($_SESSION['logged']) && ($_SESSION['logged'] == 'yes'))
  {echo <<<EOF
    <script>
      var login = document.getElementById('login');
      var signup = document.getElementById('signup');
      var logout = document.getElementById('logout');
      login.style.display = 'none';
      signup.style.display = 'none';
      logout.style.display= 'inline';
      logout.innerHTML = 'Logout, $user';
    </script>
EOF;

  }

  else
  {
    ;
    }

?>


</html>
