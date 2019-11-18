<?php
session_start();
 ?>
<html>
  <head>
    <title> Top Movies </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="topmovies.css"
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
      <br />
      <br />

    <div class = "ab">
      <div class="container">
        <img src="11.jpg" alt="Avatar" style="width:90px">
        <p><span><a href ="#" style="text-decoration:none">The Godfather (1972) </a></span> Rating : 9.2/10 </p>
        <p>The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son. (175 mins.)<br />
Director: Francis Ford Coppola<br />
Stars: Marlon Brando, Al Pacino, James Caan, Diane Keaton</p>
      </div>
      <br />

      <div class="container">
        <img src="12.jpg" alt="Avatar" style="width:90px">
        <p><span ><a href ="#" style="text-decoration:none">Schindle's List (1993)</a></span> Rating : 8.9/10 </p>
        <p>In German-occupied Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce <br />after witnessing their persecution by the Nazi Germans. (195 mins.)<br />
            Director: Steven Spielberg <br />
            Stars: Liam Neeson, Ralph Fiennes, Ben Kingsley, Caroline Goodall</p>
      </div>
      <br />
      <div class="container">
  <img src="3.jpg" alt="Avatar" style="width:90px">
  <p><span><a href ="#" style="text-decoration:none">12 Angry Men (1957)</a></span> Rating : 8.9/10</p>
  <p>A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence. (96 mins.)<br />
Director: Sidney Lumet<br />
Stars:Henry Fonda, Lee J. Cobb, Martin Balsam, John Fiedler</p>
</div>
<br />

<div class="container">
  <img src="4.jpg" alt="Avatar" style="width:90px">
  <p><span ><a href ="#" style="text-decoration:none">Life is Beautiful (1997)</a></span>Rating : 8.6/10</p>
  <p>When an open-minded Jewish librarian and his son become victims of the Holocaust, he uses a perfect mixture of humor and imagination to<br /> protect his son from the dangers around their camp. (116 mins.)<br />
Director: Roberto Benigni<br />
Stars: Roberto Benigni, Nicoletta Braschi, Giorgio Cantarini, Giustino Durano
</p>
</div><br />

<div class="container">
  <img src="5.jpg" alt="Avatar" style="width:90px">
  <p><span><a href ="#" style="text-decoration:none">The good, the bad and the ugly (1966)</a></span> Rating : 8.9/10</p>
  <p>A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery. (161 mins.)<br />
Director: Sergio Leone<br />
Stars: Clint Eastwood, Eli Wallach, Lee Van Cleef, Aldo Giuffrè</p>
</div>
<br />
<div class="container">
  <img src="6.jpg" alt="Avatar" style="width:90px">
  <p><span ><a href ="#" style="text-decoration:none">The Shawshank Redemption (1994)</a></span> Rating : 9.3/10</p>
  <p>Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency. (142 mins.)<br />
Director: Frank Darabont<br />
Stars: Tim Robbins, Morgan Freeman, Bob Gunton, William Sadler</p>
</div>
<br />
<div class="container">
  <img src="7.jpg" alt="Avatar" style="width:90px">
  <p><span><a href ="#" style="text-decoration:none">The Pursuit of Happiness (2006)</a></span>Rating : 8.0/10</p>
  <p>A struggling salesman takes custody of his son as he's poised to begin a life-changing professional career. (117 mins.)<br />
Director: Gabriele Muccino<br />
Stars: Will Smith, Thandie Newton, Jaden Smith, Brian Howe</p>
</div>
<br />
<div class="container">
  <img src="8.jpg" alt="Avatar" style="width:90px">
  <p><span ><a href ="#" style="text-decoration:none">Seven Samurai (1954) </a></span> Rating : 8.7/10 </p>
  <p>A poor village under attack by bandits recruits seven unemployed samurai to help them defend themselves. (207 mins.)<br />
Director: Akira Kurosawa<br />
Stars: Toshirô Mifune, Takashi Shimura, Keiko Tsushima, Yukiko Shimazaki</p>
</div>
<br />
<div class="container">
  <img src="9.jpg" alt="Avatar" style="width:90px">
  <p><span><a href ="#" style="text-decoration:none">The Intouchables (2011)</a></span>Rating : 8.6/10</p>
  <p>After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver. (112 mins.)<br />
Director: Olivier Nakache, Eric Toledano<br />
Stars: François Cluzet, Omar Sy, Anne Le Ny, Audrey Fleurot</p>
</div>
<br />
<div class="container">
  <img src="10.jpg" alt="Avatar" style="width:90px">
  <p><span ><a href ="#" style="text-decoration:none">Central Station (1998)</a></span>Rating : 8.0/10</p>
  <p>An emotive journey of a former school teacher, who writes letters for illiterate people, and a young boy, whose mother has just died, as they search for the father he never knew. (113 mins.)<br />
Director: Walter Salles<br />
Stars: Fernanda Montenegro, Vinícius de Oliveira, Marília Pêra, Soia Lira</p>
</div>
</div>
<br />

<div class ="page">
  <div class="pagination">
    <a href="../../Top/TopMovies/Top_Movies.php" target="_self">&laquo;</a>
    <a href="../../Top/TopMovies/Top_Movies.php" class="active">1</a>
    <a href="2.html" target="_self">2</a>
    <a href="3.html" target="_self">3</a>
    <a href="3.html" target="_self">&raquo;</a>
  </div>
</div>

</body>
</html>


  </body>
</html>
