<?php
session_start();
$_SESSION['movie']="Breaking Bad";
 ?>
<html>
<head>
<title>Breaking bad </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="breaking_bad.css">
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
<body  background="bb2.jpg">
<h1> Breaking bad  </h1>


<iframe width="560" height="315" src="https://www.youtube.com/embed/lrcqbavlbyQ" frameborder="0" allowfullscreen>
</iframe>


<h2>Review</h2>
<p>Walter White, a chemistry teacher, discovers that he has cancer and decides to get into<span> the meth-making business</span>
</br>   to repay his medical debts. His priorities begin to change when he partners with Jesse.<span>A high-school chemistry teacher</span> learns he's dying,
 so he takes up a new career as a meth
 producer in hopes of earning<span> enough money to take care of his</span> family.</p>


<p>Creator:<a href="https://www.facebook.com/Vince-Gilligan-212981265379342/" target="_blank">Vince Gilligan</a></br>
Starring:<a href="https://www.facebook.com/thebryancranston/?ref=page_internal" target="_blank">Bryan Cranston</a>,
<a href="https://en.wikipedia.org/wiki/Anna_Gunn" target="_blank">Anna Gunn</a>,
<a href="https://www.facebook.com/aaronpaul/" target="_blank">Aaron Paul</a></p>


<div>
  <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<a href="https://www.facebook.com/BreakingBad/" class="fa fa-facebook"></a>
<a href="https://twitter.com/breakingbad_amc" class="fa fa-twitter"></a>
<a href="https://www.youtube.com/watch?v=HhesaQXLuRY" class="fa fa-youtube"></a>
<a href="#" class="fa fa-snapchat"></a>

</div>



  <button type="button" onclick="alert('downloading ....')">DOWNLOAD</button>
  <br><br><br>
  <button type="button" onclick="alert('streaming ....')">STREAM IN HD</button>



  <p>Was this Review helpful :</p>

  <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>

  <script>
  function myFunction(x) {
      x.classList.toggle("fa-thumbs-down");
  }
  </script>

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
