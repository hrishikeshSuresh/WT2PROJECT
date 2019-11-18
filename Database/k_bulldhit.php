<?php

    /*echo $_GET["movie_name"];
    echo "<br />";
    echo $_GET["year"];
    echo "<br />";
    echo $_GET["rating"];
    echo "<br />";*/
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "dbx");
    $Movie = $_GET["movie_name"];
    $Year = $_GET["year"];
    $Rating = $_GET["rating"];
    $query = "SELECT * from movies ";

    $res =  (mysqli_query($conn, $query));
    $k = (mysqli_fetch_assoc($res));
    $main_arr = array(array( ));
    $count = 0;
    while ($k!= NULL)
    {
      if($Rating != 0 && $Year == 0)
      {
            if($k["Rating"] >= $_GET["rating"] && $k["Rating"] <= $_GET["rating"])
            {
                $main_arr[$count]["Title"] = $k["Title"];
                $main_arr[$count]["Rating"] = $k["Rating"];
                $main_arr[$count]["Year"] = $k["Year"];
                $count++;
              }
      }
      if($Rating == 0 && $Year != 0)
      {
            if($k["Year"] == $_GET["year"])
            {
                $main_arr[$count]["Title"] = $k["Title"];
                $main_arr[$count]["Rating"] = $k["Rating"];
                $main_arr[$count]["Year"] = $k["Year"];
                $count++;
              }
      }
      if($Rating != 0 && $Year != 0)
      {
        echo "both";
          if($k["Year"] == $_GET["year"] && ($k["Rating"] >=  $Rating && $k["Rating"] <  $Rating+1))
          {
            echo "inside both ";
              $main_arr[$count]["Title"] = $k["Title"];
              $main_arr[$count]["Rating"] = $k["Rating"];
              $main_arr[$count]["Year"] = $k["Year"];
              $count++;
            }
        }
        if($Rating == 0 && $Year == 0)
        {
            echo "not both";
                $main_arr[$count]["Title"] = $k["Title"];
                $main_arr[$count]["Rating"] = $k["Rating"];
                $main_arr[$count]["Year"] = $k["Year"];
                $count++;
        }

      echo $main_arr[$count]["Title"]." this is rated ".$main_arr[$count]["Rating"]." released in the year ".$main_arr[$count]["Year"]."<br>";
      $k = (mysqli_fetch_assoc($res));
    }
    //var_dump($main_arr);
 ?>
