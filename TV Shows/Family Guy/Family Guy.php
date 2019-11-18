<!DOCTYPE html>
<?php
session_start();
$_SESSION['movie']="FamilyGuy";
 ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">




<style>

h1{

  color: 	#3399ff;
  margin-left: 650px;

}
p.fa{
 margin-left: 370px;
color: #3366ff ;
font-size: 20px;


}
img{
margin-left: 625px;
border-radius:25px;
}


* {
    box-sizing: border-box;
}

body {
    background-color: #474e5d;
  /* background-color: tomato;  */
    font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
    content: '';
    position: absolute;
    width: 6px;
    background-color: white;
    top: 0;
    bottom: 0;
    left: 50%;
    margin-left: -3px;
}

/* Container around content */
.container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 50%;
}

/* The circles on the timeline */
.container::after {
    content: '';
    position: absolute;
    width: 25px;
    height: 25px;
    right: -17px;
    background-color: white;
    border: 4px solid #FF9F55;
    top: 15px;
    border-radius: 50%;
    z-index: 1;
}

/* Place the container to the left */
.left {
    left: 0;
}

/* Place the container to the right */
.right {
    left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}

/* The actual content */
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media all and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }

  /* Full-width containers */
  .container {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }

  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}

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
<body>
  <h1>Family Guy</h1>

  <p class="fa"> This is a unique type of review in which we try to path the history of the emmy winning show <br/>
  Family Guy with the help of a Timeline as seen below Peter Griffin and his family of two teenagers,<br/> a smart dog,
 a devilish baby and his wife find themselves in some of the most hilarious scenarios.
 </p>

<img src="fg1.jpg" ></img>


<div class="timeline">
  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <p>Peter Griffin and his family of two teenagers, a smart dog, a devilish baby and his wife find themselves in some of the most hilarious scenarios.
Program creator: Seth MacFarlane</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2016</h2>
      <p>Animated antics of the constantly grousing Griffins, a family that put some fun in dysfunctional. While dad Peter is a tad dim and lazy, mum Lois is none of the above. Then there are hapless teens Meg and Chris; sassy baby Stewie, who's wise (and a wise guy) beyond his years; and family dog Brian, who might be the smartest of the lot.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2015</h2>
      <p>In 2015 family guy wnt though a rough patch , unfortunately the cast members were in booked on
      other contracts and the show was about to get cancelled by the FOX studios but due to the referral
    of the exclusive producer Seth MacFarlane the show wasent cancelled after all and went on to become
  an emmy winning show   </p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2012</h2>
      <p>Parents need to know that Family Guy is very funny; the quirky scenarios can induce giggles or even guffaws in grown-ups. But Seth MacFarlane's show isn't meant to be watched by kids or young teens. Unpredictable is the name of the game in the town of Quahog, Rhode Island, where the Griffin family spends most of its time watching television and getting into trouble</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2011</h2>
      <p>In 2011 family guy was nominated for the best comedy show category at the emmys
        . By popular vote they won the emmy and the director won a  creative award
       <br/> </p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2007</h2>
      <p>This was the beginig years of family guy and the popularity rose due to its cut throat comedy and subtle satirical humor along with hints of political drama
      which led to impressive reviews on popular rating sites like ours along with IMDB and Rotten Tomatoes </p>
    </div>
  </div>
</div>


  <h1 style="margin-left:0;">Comment Here </h1>
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
   echo '<center style="color:white;">You have to login to submit a Comment!</center>';
  }
   else{//Including dbconfig file.
  include '../../Comments/dbconfig.php';
  $arr = explode('@',$_SESSION["username"]);
  $movie = $_SESSION["movie"];
  $username = $arr[0];
  $comment = $_POST["comment"];

  $query = "INSERT INTO comments (movie,username,comment) VALUES ('$movie','$username','$comment')";
  mysqli_query($conn,$query);

  echo '<center style="color:white;"> Comment Successfully Submitted </center>';
  }
  }

   ?>




</body>
</html>
