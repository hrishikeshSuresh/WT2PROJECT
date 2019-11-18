<?php
//if(isset($_POST["submit"])){
  if(isset($_POST["search"])){
$page = $_POST["search"];
if(file_exists("../Movies/$page/$page.php"))
  header("location: ../Movies/$page/$page.php");
else {
  header("location: ../TV Shows/$page/$page.php");
}
}

//}
 ?>
