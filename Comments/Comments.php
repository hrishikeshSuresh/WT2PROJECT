<html>
<head>
  <link rel="stylesheet" href="Comment.css" />
</head>
<body bgcolor="#86eeff">
</body>
</html>

<?php
session_start();
include 'dbconfig.php';
$movie = $_SESSION["movie"];
$query = "SELECT * FROM comments WHERE movie='$movie' ";
$res = mysqli_query($conn,$query);
$k = (mysqli_fetch_assoc($res));
echo "<h2>All comments for ".$k["movie"]."</h2>";
echo "<div class=\"container\">";
while($k!=NULL){
  echo "<div class=\"dialogbox\"><div class=\"body\"><span class=\"tip tip-up\"></span><div class=\"message\"><span>".$k["username"]."<br>".$k["comment"]."</span></div></div></div>";
  $k = (mysqli_fetch_assoc($res));
}
echo "</div>";

 ?>
