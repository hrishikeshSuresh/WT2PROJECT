<?php
session_start();
$_SESSION['movie']="Deadpool";
 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comment Box</title>
<style>

/*body{
 margin:0px;
 font-family:Baskerville, 'Palatino Linotype', Palatino, 'Century Schoolbook L', 'Times New Roman', serif;
 }*/

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
<table bgcolor="#f2f2f2" style="padding:50px" align="center">
<form action="" method="post">
<tr>
<td> Comment : </td><td><textarea name="comment" rows="6" cols="50"></textarea></td>
</tr>
<tr>
<td><input type="submit" name="submit"></td>
<td>
  <a href="Comments.php" target="_blank">Click here to view all comments for this movie</a>
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
include 'dbconfig.php';
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
