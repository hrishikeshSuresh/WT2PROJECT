<?php
session_start();
 ?>
<html>
  <head>
    <title> Top Movies </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="topshows.css"
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
        <img src="51.jpg" alt="Avatar" style="width:90px">
        <p><span><a href ="#" style="text-decoration:none">Stranger Things (2016 -)</a></span> Rating : 9.0/10 </p>
        <p>When a young boy disappears, his mother, a police chief, and his friends must confront terrifying forces in order to get him back.
          <br />
Votes: 397,063<br />
Stars: Millie Bobby Brown, Finn Wolfhard, Winona Ryder, David Harbour<br />
Genre: Drama, Fantasy, Horror </p>
      </div>
      <br />

      <div class="container">
        <img src="52.jpg" alt="Avatar" style="width:90px">
        <p><span ><a href ="#" style="text-decoration:none">The Walking Dead (2010 -)</a></span> Rating : 8.5/10 </p>
        <p>Sheriff Deputy Rick Grimes wakes up from a coma to learn the world is in ruins, and must lead a group of survivors to stay alive.<br />
          Votes: 717,319<br />
          Stars: Andrew Lincoln, Norman Reedus, Melissa McBride, Chandler Riggs <br />
          Genre: Drama, Horror, Thriller
          </p>
      </div>
      <br />
      <div class="container">
  <img src="53.jpg" alt="Avatar" style="width:90px">
  <p><span><a href ="#" style="text-decoration:none">Game Of Thrones (2011 -)</a></span> Rating : 9.5/10</p>
  <p>Nine noble families fight for control over the mythical lands of Westeros, while a forgotten race returns after being dormant for thousands of years.<br />
Votes: 1,258,032<br />
Stars: Emilia Clarke, Peter Dinklage, Kit Harington, Lena Headey<br />
Genre: Adventure, Drama, Fantasy
</p>
</div>
<br />

<div class="container">
  <img src="54.jpg" alt="Avatar" style="width:90px">
  <p><span ><a href ="#" style="text-decoration:none">The Flash (2014 -)</a></span>Rating : 8.0/10</p>
  <p>When an open-minded Jewish librarian and his son become victims of the Holocaust, he uses a perfect mixture of humor and imagination to<br /> protect his son from the dangers around their camp. (116 mins.)<br />
Votes: 233,349<br />
Stars: Grant Gustin, Candice Patton, Danielle Panabaker, Carlos Valdes<br />
Genre: Action, Adventure, Drama
</p>
</div><br />

<div class="container">
  <img src="55.jpg" alt="Avatar" style="width:90px">
  <p><span><a href ="#" style="text-decoration:none">American Horror Story (2011 -)</a></span> Rating : 8.2/10</p>
  <p>A bounty hunting scam joins two men in an uneasy alliance against a third in a race to find a fortune in gold buried in a remote cemetery. (161 mins.)<br />
Votes: 221,957<br />
Stars: Lady Gaga, Kathy Bates, Angela Bassett, Sarah Paulson<br />
Genre: Drama, Horror, Thriller</p>
</div>
<br />
<div class="container">
  <img src="56.jpg" alt="Avatar" style="width:90px">
  <p><span ><a href ="#" style="text-decoration:none">The Orville (2017 -)</a></span> Rating : 7.8/10</p>
  <p>Follows the crew of the not-so-functional exploratory ship in the Earth's interstellar fleet, 400 years in the future.<br />
Votes: 19,606<br />
Stars: Seth MacFarlane, Adrianne Palicki, Penny Johnson Jerald, Scott Grimes<br />
Genre: Adventure, Comedy, Drama</p>
</div>
<br />
<div class="container">
  <img src="57.jpg" alt="Avatar" style="width:90px">
  <p><span><a href ="#" style="text-decoration:none">Shameless (2011 -)</a></span>Rating : 8.7/10</p>
  <p>An alcoholic man lives in a perpetual stupor while his six children with whom he lives cope as best they can.<br />
Votes: 136,502<br />
Stars: Emmy Rossum, William H. Macy, Ethan Cutkosky, Shanola Hampton<br />
Genre: Comedy, Drama
</p>
</div>
<br />
<div class="container">
  <img src="58.jpg" alt="Avatar" style="width:90px">
  <p><span ><a href ="#" style="text-decoration:none">Mindhunter (2017 -) </a></span> Rating : 8.8/10 </p>
  <p>In the late 1970s two FBI agents expand criminal science by delving into the psychology of murder and getting uneasily close to all-too-real monsters.<br />
Votes: 40,147<br />
Stars: Jonathan Groff, Holt McCallany, Anna Torv, Hannah Gross<br />
Genre: Crime, Drama, Thriller
</p>
</div>
<br />
<div class="container">
  <img src="59.jpg" alt="Avatar" style="width:90px">
  <p><span><a href ="#" style="text-decoration:none">Grey's Anatomy (2005 -)</a></span>Rating : 7.8/10</p>
  <p>After he becomes a quadriplegic from a paragliding accident, an aristocrat hires a young man from the projects to be his caregiver. (112 mins.)<br />
Votes: 183,038<br />
Stars: Ellen Pompeo, Justin Chambers, Chandra Wilson, James Pickens Jr.<br />
Genre: Drama, Romance
</p>
</div>
<br />
<div class="container">
  <img src="60.jpg" alt="Avatar" style="width:90px">
  <p><span ><a href ="#" style="text-decoration:none">The Arrow (2012 -)</a></span>Rating : 7.8/10</p>
  <p>Spoiled billionaire playboy Oliver Queen is missing and presumed dead when his yacht is lost at sea. He returns five years later a changed man, determined to clean up the city as a hooded vigilante armed with a bow.<br />
Votes: 343,900<br />
Stars: Stephen Amell, Katie Cassidy, David Ramsey, Susanna Thompson<br />
Genre: Action, Adventure, Crime
</p>
</div>
</div>
<br />

<div class ="page">
  <div class="pagination">
    <a href="Top_Shows.php" target="_self">&laquo;</a>
    <a href="Top_Shows.php" class="active">1</a>
    <a href="12.html" target="_self">2</a>
    <a href="13.html" target="_self">3</a>
    <a href="13.html" target="_self">&raquo;</a>
  </div>
</div>

</body>
</html>


  </body>
</html>
