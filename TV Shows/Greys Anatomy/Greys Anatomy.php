<?php
session_start();
$_SESSION['movie']="GreyAnatomy";
 ?>

<html>
<head>
<title>Greys Anatomy </title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="greys.css">
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
body{
  background-image: url("ga2.jpg");
  background-repeat: no-repeat;
  background-size: 115% 100%;
}
</style>

</head>

<body>
<h1> Greys Anatomy  </h1>

<iframe width="560" height="315" src="https://www.youtube.com/embed/yEcqkM5-guU?start=3" frameborder="0" allowfullscreen>
</iframe>

<h2>Review</h2>
<p>
Surgical interns and their supervisors embark on a medical journey where they become part
</br> of heart-wrenching stories and make life-changing decisions in order to become the finest</br> doctors.
The story revolves around five surgical interns and their supervisors, showing </br>their personal and professional lives.</br>
<span>Creators</span>:<span style="color: #666699;"><a href="https://www.facebook.com/ShondaRhimes/" target="_blank"> Shonda Rhimes</a>,<a href="https://www.facebook.com/RobCornishPage/" target="_blank	"> Rob Corn</a><br><span>
<span>Starring</span>:<span style="color: #666699;"><a href="https://www.facebook.com/Ellen-Pompeo-1867153513496294/" target="_blank"> Ellen Pompeo</a>,<a href="https://www.facebook.com/Justin-Chambers-52114315802/" target="_blank"> Justin Chambers</a>,<a href="https://www.facebook.com/Chandra-Wilson-36206787974/" target="_blank"> Chandra Wilson</a></span>
</p>



<button type="button" onclick="alert('downloading ....')">DOWNLOAD</button>
<button type="button" onclick="alert('streaming ....')">STREAM IN HD</button>



<p>Click on the icon to toggle between thumbs-up and thumbs-down (like/dislike):</p>

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
