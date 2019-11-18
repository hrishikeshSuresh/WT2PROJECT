<?php
include("dbconfig.php");
$query = "CREATE TABLE users (id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,username VARCHAR(50) NOT NULL ,movie VARCHAR(50) NOT NULL,comment VARCHAR(200) NOT NULL)";
var_dump(mysqli_query($conn,$query));
mysqli_close($conn);

 ?>
