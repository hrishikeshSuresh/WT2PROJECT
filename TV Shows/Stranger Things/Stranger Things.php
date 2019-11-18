<!DOCTYPE html>
<?php
session_start();
$_SESSION['movie']="StrangerThings";
 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title> Stranger Things Review </title>
    <link rel="stylesheet" type="text/css" href="mystyle1.css">
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

  <body style = "background-color:rgb(204, 204, 255);">
    <h1 style = "font-family:Trebuchet MS;font-size:50px;" align ="center"> <i>Stranger Things’ Is the Show of the Summer:Let’s Talk About It.</i>
  </h1>
  <h4 style = "font-size:20px;" align = "center">Balancing style and substance is always challenging for a series like Stranger Things, but the show is perfectly calibrated. It feels like watching a show produced during the era in which it’s set, but with the craft of today’s prestige television.</h4>
     <div id ="1">
    <img src="ST.jpg" alt ="Kingsman" width = "70%" height = "30%" />
  </div>
  <br /><br />
    <p style = "font-size:19px;">
      <b>Cast:</b> Winona Ryder, David Harbour, Millie Bobby Brown, Finn Wolfhard, Caleb McLaughlin, Gaten Matarazzo
    </p>
    <p style = "font-size:19px;">
      <b>Average Ratings:</b> 4.6/5
    </p>
    <p style = "font-size:19px;">
      <b>Genre:</b> Science Fiction & Fantasy
    </p>
    <p style = "font-size:19px;">
      <b>Created By:</b> Matt Duffer, Ross Duffer
    </p>
    <p style = "font-size:19px;">
      <b>Exec Producers: </b> Matt Duffer, Ross Duffer, Shawn Levy, Dan Cohen, Karl Gajdusek
    </p>
    <p style = "font-size:19px;">
      <b>Network:</b> Netflix
    </p>
    <div>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/XWxyRG_tckY?rel=0" frameborder="0" allowfullscreen></iframe>
  </div>
    <p align="center" class = "intro" style = "font-size:18px;">
      A love letter to the '80s classics that captivated a generation, Stranger Things is set in 1983 Indiana, where a young boy vanishes into thin air. As friends, family and local police search for answers, they are drawn into an extraordinary mystery involving top-secret government experiments, terrifying supernatural forces and one very strange little girl.
    </p>

    <div class = "2">
      <img src = "ST1.jpg" alt = "Image2" width = "60%" height = "30%"/>
      <div class="bottom-left">Stranger Things Review - A still from the tv show</div>
    </div>
    <br />
    <div>

  </div>
  <br />

  <div id ="3">
 <img src="ST2.jpg" alt ="Kingsman" width = "50%" height = "20%" />
 <div class="bottom-left1">Stranger Things Review - A still from the tv show</div>
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
<p>The films "Stranger Things" honors transcended their genres. This seems happy to propitiate them.</p>
</div>

<div class="container" style ="width:1050px">
<img src="1.jpg" alt="Avatar" style="width:90px">

<p><span >Rebecca Flex</span>- The A.V Club</p>
<p>Yes, this show lives in the past, but it isn't stuck there. Where, say, Fuller House or The X-Files ask if you remember your old life, Stranger Things reminds you of what it's like to be alive right now.</p>
</div>
<br />
<br />
<h2 style = "font-family:Trebuchet MS;"> Your Comment: </h2>

<!--<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your Email Address..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname"> Subject </label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Write Something..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Comment</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write Something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>-->
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
