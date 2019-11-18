<?php
session_start();
$_SESSION['movie']="KingsMan";
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Kingsman Movie Review </title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style>
    input[type=text], select {
width: 100%;
border-radius: 5px;
margin: 7px 0;
border: 1px solid #ccc;
padding: 14px 18px;
display: inline-block;
box-sizing: border-box;
}

input[type=submit]:hover {
background-color: #00a7d1;
}

textarea, select {
width: 100%;
border-radius: 5px;
margin: 7px 0;
border: 1px solid #ccc;
padding: 14px 18px;
display: inline-block;
box-sizing: border-box;
}

input[type=submit] {
width: 100%;
border: none;
color: white;
padding: 14px 20px;
background-color: #01c9fb;
margin: 8px 0;
cursor: pointer;
border-radius: 4px;

}
    </style>
  </head>

  <body style = "background-color:yellow;">
    <h1 style = "font-family:Trebuchet MS;font-size:50px;" align ="center"> <i>Kingsman: The Golden Circle Movie Review </i> - Still Big, Still Bizarre,
       Still Better Than James Bond
  </h1>
  <h4 style = "font-size:20px;" align = "center">Kingsman: The Golden Circle Movie Review - This is a film that, like the goofy entertainers Manmohan Desai made in the 70s,
     has a massively rollicking 'item' scene every few scenes...</h4>
     <div id ="1">
    <img src="AS4.jpg" alt ="Kingsman" width = "70%" height = "30%" />
  </div>
  <br /><br />
    <p style = "font-size:19px;">
      <b>Cast:</b> Colin Firth, Julianne Moore, Taron Egerton, Mark Strong, Halle Berry,
       Elton John, Channing Tatum, Jeff Bridges
    </p>
    <p style = "font-size:19px;">
      <b>Average Ratings:</b> 3.7/5
    </p>
    <p style = "font-size:19px;">
      <b>Genre:</b> Action & Adventure, Comedy
    </p>
    <p style = "font-size:19px;">
      <b>Directed By:</b> Matthew Vaughn
    </p>
    <p style = "font-size:19px;">
      <b>Written By:</b> Jane Goldman, Matthew Vaughn
    </p>
    <p style = "font-size:19px;">
      <b>In Theatres:</b> Sep 22, 2017  Wide
    </p>
    <p style = "font-size:19px;">
      <b>Box Office:</b> $66,637,153
    </p>
    <p style = "font-size:19px;">
      <b>Studio:</b> 20th Century Fox
    </p>
    <div>
      <iframe width="560" height="315" style = "float:middle" src="https://www.youtube.com/embed/4PggfbzJcvA?rel=0" frameborder="0" allowfullscreen>
      </iframe>
  </div>
    <p align="center" class = "intro" style = "font-size:18px;">
       "Kingsman: The Secret Service" introduced the world to Kingsman - an independent, international intelligence agency operating at the highest level of discretion, whose ultimate goal is to keep the world safe. In "Kingsman: The Golden Circle," our heroes face a new challenge. When their headquarters are destroyed and the world is held hostage, their journey leads them to the discovery of an allied spy organization in the US called Statesman, dating back to the day they were both founded. In a new adventure that tests their agents' strength and wits to the limit, these two elite secret organizations band together to defeat a ruthless common enemy, in order to save the world, something that's becoming a bit of a habit for Eggsy...
    </p>

    <div class = "2">
      <img src = "image2.jpg" alt = "Image2" />
      <div class="bottom-left">Kingsman: The Golden Circle Movie Review - A still from the film</div>
    </div>
    <br />
    <div>

  </div>
  <br />

  <div id ="3">
 <img src="image3.jpg" alt ="Kingsman" width = "60%" height = "30%" />
 <div class="bottom-left1">Kingsman: The Golden Circle Movie Review - A still from the film</div>
</div>

  <h2 style = "font-family:Trebuchet MS;">ADD YOUR RATING</h2>

  <fieldset class="rating">
    <legend>Please rate:</legend>
    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
</fieldset>
<br />
<br />
<br />
<br />

<h2 style = "font-family:Trebuchet MS;"> Critics Reviews</h2>

<div class="container" style ="width:1050px" >
<img src="2.jpg" alt="Avatar" style="width:90px">
<p><span>David Wlegand </span>- SanFrancisco Chronicle</p>
<p>The movie is too long, too violent, too silly-too everything. Yet for those who enjoyed the original Kingsman, it is a more than adequate second act. To put it another way: First time satire, second time farce.</p>
</div>

<div class="container" style ="width:1050px">
<img src="1.jpg" alt="Avatar" style="width:90px">

<p><span >Rebecca Flex</span>- The A.V Club</p>
<p>If the first Kingsman was a work of lol-nothing-matters provocation with a real mean streak, the second is a work of lol-nothing-matters laziness... </p>
</div>
<br />
<br />
<h2 style = "font-family:Trebuchet MS;"> Your Comment: </h2>


<table bgcolor="#f2f2f2" style="padding:50px" align="center">
<form action="" method="post">
<tr>
<td> Comment : </td><td><textarea name="comment" rows="6" cols="50"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
<td>
  <a href="../../Comments/Comments.php" target="_blank">Click here to view all comments for this movie</a>
</td></tr>

</form>
</table>



<?php
if(isset($_POST["submit"]))
{
if(!isset($_SESSION["username"])){
 echo '<center>You have to login to submit a Comment!</center>';
}
 else{//Including dbconfig file.
include '../../Comments/dbconfig.php';
$arr = explode('@',$_SESSION["username"]);
$movie = $_SESSION["movie"];
$username = $arr[0];
$comment = $_POST["comment"];

$query = "INSERT INTO comments (movie,username,comment) VALUES ('$movie','$username','$comment')";
mysqli_query($conn,$query);

echo '<center> Comment Successfully Submitted </center>';
}
}

 ?>





  </body>
</html>
