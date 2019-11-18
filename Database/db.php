<?php
$servername = "localhost";
$username = "root";
$password = '';
$dbname = 'dbx';

$conn = mysqli_connect($servername,$username,$password);

if(!$conn)
{
  echo "connection failed";
}
else
{
  echo "connection established<br>";
}

$query = "CREATE DATABASE dbx";
mysqli_query($conn,$query);
mysqli_close($conn);

$conn = mysqli_connect($servername,$username,$password,"dbx");
$query = "CREATE TABLE Movies (ID INT PRIMARY KEY,Title VARCHAR(30) NOT NULL,Genre VARCHAR(30),Year INT(4),Rating FLOAT(2))";
var_dump(mysqli_query($conn,$query));

$file = fopen("IMDB-Movie-Data.csv","r");

while(! feof($file))
  {
  $getData = fgetcsv($file,10000,",");
  $query = "INSERT INTO Movies(ID,Title,Genre,Year,Rating) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[6]."','".$getData[8]."')";
 var_dump(mysqli_query($conn,$query));
  }

fclose($file);
?>
