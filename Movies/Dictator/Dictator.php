<?php
session_start();
$_SESSION['movie']="Dictator";
 ?>

<html>
<head>
  <title>The Dictator</title>
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
  <style>
body{
  background-size:cover;
}
h1
{
  color:black;
 font-family: 'Tangerine', serif;
  margin-top: 220px;
  font-size: 48px;
}
p
{
  font-size:20px;
  font-family: courier;
  color:  #db6d24;
  font-weight: bold;
}

#myDIV {
    width: 50%;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
    border: 2px solid;
  border-radius: 25px;
}
button{

  margin-left: 300px;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  font-size: 25px;

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
<body background="td.jpg">

<h1>"The Dictator" is a guilty pleasure, full of jokes that cue both laughter and a small helping of shame.</h1>
<p><span style="font-size:50px;">T</span>he heroic story of a North African dictator who risks his life to ensure that democracy would
  <br/>never come to the country he so lovingly oppressed. in addition to being obscene, disgusting,<br/> scatological, vulgar, crude and so on. Having seen Sacha Baron Cohen promoting it on countless <br/>talk shows, I feared the movie
   would feel like deja vu. But no. He establishes a claim to be the<br/>best comic filmmaker now working.
 And in a speech about dictatorships, he practices merciless<br/> political satire.</p>


 <br/>
 <br/>
 <iframe style="margin-left:200px;" width="560" height="315" src="https://www.youtube.com/embed/cYplvwBvGA4" frameborder="0" allowfullscreen></iframe>

 <br/>
 <br/>
 <!--<button onclick="myFunction()">BEST COMMENTS</button>

 <div id="myDIV">
     BEST MOVIE OF THE YEAR 2015<br>
    GROSSED OVER 150 MILLION<br>
    MUST WIN AN EMMY OR AN OSCAR <br>
</div>




 <script>
 function myFunction() {
     var x = document.getElementById("myDIV");
     if (x.style.display === "none") {
         x.style.display = "block";
     } else {
         x.style.display = "none";
     }
 }
</script>-->
<br><br>

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
 echo '<center style="color:black;">You have to login to submit a Comment!</center>';
}
 else{//Including dbconfig file.
include '../../Comments/dbconfig.php';
$arr = explode('@',$_SESSION["username"]);
$movie = $_SESSION["movie"];
$username = $arr[0];
$comment = $_POST["comment"];

$query = "INSERT INTO comments (movie,username,comment) VALUES ('$movie','$username','$comment')";
mysqli_query($conn,$query);

echo '<center style="color:black;"> Comment Successfully Submitted </center>';
}
}

 ?>



</body>
</html>
