<?php
session_start();
$_SESSION['movie']="Conjuring";
 ?>
<html>
<head>
  <title>Conjuring </title>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">


  <script>
    <button onclick="http://xmovies8.fm/watch/ox0oKave-the-conjuring.html">Continue</button>
  </script>


<style>
body{
  background-size: cover;
 font-family: 'Tangerine', serif;
  font-size: 25px;  */

}
p{
/*  font-family:serif; */
font-family: 'Tangerine', serif;
font-size: 25px;
}
span
{
  color: #ac3939;
  font-size: 45px;
}
button{

  margin-left: 400px;
  background-color:#ac3939;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-size: 25px;

}

/* the director  and cast part */

.chip {
    display: inline-block;
    padding: 0 25px;
    height: 50px;
    font-size: 18px;
    line-height: 50px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}

.closebtn {
    padding-left: 10px;
    color: #888;
    font-weight: bold;
    float: right;
    font-size: 20px;
    cursor: pointer;
}

.closebtn:hover {
    color: #000;
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


<body background="cj1.jpg">

<h1 style="margin-top:360px;"><span>Ed Warren:</span> Sometimes it's better to keep the genie in the bottle.</h1>
<h2>Starring: Lili Taylor, Patrick Wilson, Ron Livingston, Vera Farmiga<br/>
<span>Summary:</span> Paranormal investigators Ed and Lorraine Warren try to help a family terrorized by a dark presence in their farmhouse. Forced to confront a powerful entity, the Warrens find themselves caught in the most terrifying case of their lives.<br/>
<span>Director:</span> James Wan<br/>
<span>Genre(s):</span> Biography, Thriller, Horror<br/>
<span>Rating:</span> R<br/>
<span>Runtime:</span> 112 min<br/></h2>




<form method="get" action="http://xmovies8.fm/watch/ox0oKave-the-conjuring.html">
  <button type="submit">STREAM HD</button>

</form>



  <button type="button" onclick="alert('DOWNLOADING....')">DOWNLOAD</button>


  <h1 style="color: #ac3939;">The Award Winning Cast </h1>

  <div class="chip">
    <img src="pw.jpg" alt="Person" width="96" height="96">
    Patrick Wilson
    <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>

</div>
  <div class= "chip">
   <img src="jk.jpg" alt="Person" width="96" height="96">
    Joey King
    <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>

  </div>
  <div class= "chip">
   <img src="lt.jpg" alt="Person" width="96" height="96">
    Lilly Taylor
    <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>

  </div>
  <div class= "chip">
   <img src="rl.jpg" alt="Person" width="96" height="96">
    Ron Livingston
    <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>

  </div>
  <br><br><br><br><br>

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
