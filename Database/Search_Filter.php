<html>
 <head>
   <title> Search Page </title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
    .search { position: relative; left: 200px;}

    div {position: relative; left: 450px; color: white;}
@font-face {
  font-family: "Bodoni";
  src: url('Bodoni 72.ttc');
}
 b {color: #6699ff;}
    h3 { font-family: Bodoni;}





body { background-color: #333333;}
}
   </style>
 </head>
 <body>

   <div class = "search">
   <form method="GET" action = "Search_Filter.php" target="_self">
     <br />
     <br />
     <label style= " color: #ff9900;">Search for a movie : <input type="text" name="movie_name" /></label>
     <label style= " color: #ff9900;">Select year : <select name="year">
                   <option value="0" selected></option>
                   <option value="2006">2006</option>
                   <option value="2007">2007</option>
                   <option value="2008">2008</option>
                   <option value="2009">2009</option>
                   <option value="2010">2010</option>
                   <option value="2011">2011</option>
                   <option value="2012">2012</option>
                   <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016" >2016</option>
     </select></label>
     <label style= " color: #ff9900;">Select rating : <select name="rating">
                   <option value="0" selected></option>
                    <option value="8">9</option>
                    <option value="8">8</option>
                    <option value="7">7</option>
                    <option value="6">6</option>
                    <option value="5">5</option>
                    <option value="4">4</option>
                    <option value="3">3</option>
                    <option value="2">2</option>
                    <option value="1">1</option>
     </select></label>
     <label style= " color: #ff9900;">Select genre :<select name="genre">
       <option value="NULL" selected></option>
        <option value="Action">Action</option>
        <option value="Adventure">Adventure</option>
        <option value="Sci-Fi">Sci-Fi</option>
        <option value="Horror">Horror</option>
        <option value="Thriller">Thriller</option>
        <option value="Animation">Animation</option>
        <option value="Comedy">Comedy</option>
        <option value="Family">Family</option>
        <option value="Fantasy">Fantasy</option>
        <option value="Drama">Drama</option>
        <option value="Biography">Biography</option>
        <option value="History">History</option>
        <option value="Crime">Crime</option>
        <option value="Romance">Romance</option>
        <option value="Music">Music</option>
     </select></label>
     <label style= " color: #ff9900;"><input type="submit" value="Search" /></label>
   </form>
 </div>
 </body>
</html>
<?php
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, "dbx");
    $Movie = @$_GET["movie_name"];
    $Year = @$_GET["year"];
    $Rating = @$_GET["rating"];
    $Genre = @$_GET["genre"];
    $query = "SELECT * from movies ";

    $res =  (mysqli_query($conn, $query));
    $k = (mysqli_fetch_assoc($res));
    $main_arr = array(array( ));
    $count = 0;
    while ($k!= NULL)
    {
      if($Movie!=NULL){
        $query = "SELECT * from movies WHERE Title LIKE '%$Movie%'";
        $result =  (mysqli_query($conn, $query));
        $Result = mysqli_fetch_assoc($result);
        while($Result!=NULL){
        /*$main_arr[$count]["Title"] = $Result["Title"];
        $main_arr[$count]["Rating"] = $Result["Rating"];
        $main_arr[$count]["Year"] = $Result["Year"];
        $Result = mysqli_fetch_assoc($result);
        $count++;*/
        if($Rating != 0 && $Year == 0)
        {
              if($Result["Rating"] >= $Rating && $Result["Rating"] < $Rating+1)
              {
                $main_arr[$count]["Title"] = $Result["Title"];
                $main_arr[$count]["Rating"] = $Result["Rating"];
                $main_arr[$count]["Year"] = $Result["Year"];
                  $count++;
                }
        }
        if($Rating == 0 && $Year != 0)
        {
          if($Result["Year"] == $_GET["year"])
              {
                $main_arr[$count]["Title"] = $Result["Title"];
                $main_arr[$count]["Rating"] = $Result["Rating"];
                $main_arr[$count]["Year"] = $Result["Year"];
                  $count++;
                }
        }
        if($Rating != 0 && $Year != 0)
        {
            if($Result["Year"] == $_GET["year"] && ($Result["Rating"] >=  $Rating && $Result["Rating"] <  $Rating+1))
            {
              $main_arr[$count]["Title"] = $Result["Title"];
              $main_arr[$count]["Rating"] = $Result["Rating"];
              $main_arr[$count]["Year"] = $Result["Year"];
                $count++;
              }
          }
        if($Rating == 0 && $Year == 0)
          {
            $main_arr[$count]["Title"] = $Result["Title"];
            $main_arr[$count]["Rating"] = $Result["Rating"];
            $main_arr[$count]["Year"] = $Result["Year"];
                  $count++;
          }
          $Result = mysqli_fetch_assoc($result);
      }
      break;
      }
      else if($Rating != 0 && $Year == 0 && $Genre=="NULL")
      {
            if($k["Rating"] >= $Rating && $k["Rating"] < $Rating+1)
            {
                $main_arr[$count]["Title"] = $k["Title"];
                $main_arr[$count]["Rating"] = $k["Rating"];
                $main_arr[$count]["Year"] = $k["Year"];
                $count++;
              }
      }
      else if($Rating == 0 && $Year != 0 && $Genre=="NULL")
      {
        if($k["Year"] == $_GET["year"])
            {
                $main_arr[$count]["Title"] = $k["Title"];
                $main_arr[$count]["Rating"] = $k["Rating"];
                $main_arr[$count]["Year"] = $k["Year"];
                $count++;
              }
      }
      else if($Rating != 0 && $Year != 0 && $Genre=="NULL")
      {
          if($k["Year"] == $_GET["year"] && ($k["Rating"] >=  $Rating && $k["Rating"] <  $Rating+1))
          {
              $main_arr[$count]["Title"] = $k["Title"];
              $main_arr[$count]["Rating"] = $k["Rating"];
              $main_arr[$count]["Year"] = $k["Year"];
              $count++;
            }
        }
      else if($Rating == 0 && $Year == 0 && $Genre=="NULL")
        {
                $main_arr[$count]["Title"] = $k["Title"];
                $main_arr[$count]["Rating"] = $k["Rating"];
                $main_arr[$count]["Year"] = $k["Year"];
                $count++;
        }
        else if($Rating == 0 && $Year == 0 && $Genre!=NULL)
          {
            $arr = explode(",",$k["Genre"]);
            if(in_array($Genre,$arr)){
                  $main_arr[$count]["Title"] = $k["Title"];
                  $main_arr[$count]["Rating"] = $k["Rating"];
                  $main_arr[$count]["Year"] = $k["Year"];
                  $count++;
                }
          }
          else if($Rating == 0 && $Year != 0 && $Genre!=NULL)
            {
              $arr = explode(",",$k["Genre"]);
              if(in_array($Genre,$arr) && $k["Year"] == $_GET["year"]){
                    $main_arr[$count]["Title"] = $k["Title"];
                    $main_arr[$count]["Rating"] = $k["Rating"];
                    $main_arr[$count]["Year"] = $k["Year"];
                    $count++;
                  }
            }
            else if($Rating != 0 && $Year == 0 && $Genre!=NULL)
              {
                $arr = explode(",",$k["Genre"]);
                if(in_array($Genre,$arr) && ($k["Rating"] >=  $Rating && $k["Rating"] <  $Rating+1)){
                      $main_arr[$count]["Title"] = $k["Title"];
                      $main_arr[$count]["Rating"] = $k["Rating"];
                      $main_arr[$count]["Year"] = $k["Year"];
                      $count++;
                    }
              }
              else if($Rating != 0 && $Year != 0 && $Genre!=NULL)
                {
                  $arr = explode(",",$k["Genre"]);
                  if(in_array($Genre,$arr) && ($k["Rating"] >=  $Rating && $k["Rating"] <  $Rating+1) && $k["Year"] == $_GET["year"]){
                        $main_arr[$count]["Title"] = $k["Title"];
                        $main_arr[$count]["Rating"] = $k["Rating"];
                        $main_arr[$count]["Year"] = $k["Year"];
                        $count++;
                      }
                }
      $k = (mysqli_fetch_assoc($res));
    }



    foreach ($main_arr as $key)
    {
      echo "<div><b>".$key["Title"]."</b>: This is rated <b>".$key["Rating"]."</b> and was released in the year <b>".$key["Year"]."</b></div><br><br>";
    }

    echo "<div><h3> >>>>>><b>".$count."</b> Results have been found<<<<<<< </h3></div>";
 ?>
