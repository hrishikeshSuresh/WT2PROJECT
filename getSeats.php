<?php session_start(); 

if(isset($_SESSION['logged']) && ($_SESSION['logged'] == 'yes'))
	{
		//do nothing
	}

	else
	{
		echo <<<EOF
    <script>
    alert("Sorry! You must be logged in to view this.");
    window.location.href = 'login.html';
    </script>
EOF;
    }
	

$username = $_SESSION['user'];
$password = $_SESSION['password'];
?>

<!DOCTYPE html>
<head>
	<title>Reserve Table</title>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css" />
  <link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/myprofile.css">
  
</head>
<body>
	<div class = "navbar" target =_top>
    <a href="index.php"><img src="images/logo_w.png" id="logo"/></a>
      <a href="index.php" class="btn">Home</a>
      <a href="movies.html" class="btn">Movies</a>
      <a href="tvshows.html" class="btn">TV Shows</a>
      <a href="myprofile.php" class="btn">My Profile</a>
      <input type="text" name="search" placeholder="Search" class="search_text">
      <a href="#" class="search"><i class="fa fa-search"></i></a>
      <div class="loginBtn">
        <a href="login.html" class="btn" id="login">Log in</a>
        <a href="signup.html" class="btn" id="signup">Sign up</a>
        <a class="btn" href="logout.php" id="logout">Log Out</a>
      </div>
  </div>

  <div id="w">
    <div id="content">
      <h1>Reserve Table</h1>

      <section id="settings">
        <p>Make a reservation</p>
        
        <p class="setting"><span>Username </span><?php echo "$username";?> </p>
        
        <p class="setting"><span>Password </span> <?php echo "$password";?></p>
        <select id="restaurantSelection">
          <option value="Mirazur">Mirazur</option>
            <option value="Noma">Noma</option>
            <option value="Asador Etxebarri">Asador Etxebarri</option>
            <option value="Gaggan">Gaggan</option>
            <option value="Geranium">Geranium</option>
            <option value="Central">Central</option>
            <option value="Mugaritz">Mugaritz</option>
            <option value="Arpege">Arpege</option>
            <option value="Disfrutar">Disfrutar</option>
            <option value="Maido">Maido</option>
          </select>
  
        <button class="pass danger" id="bookTableButton">Book a table</button>
        <button class="pass danger" id="showTableButton">Check availability</button>
        <div id="selectionNumber"></div>
        <div id="selectionNumber2"></div>
        <div id="form_change">
        <form action="password_change.php" method="post">
        	<span style="font-size: 20px;">Enter new password : </span><input type="password" name="new_pass" id="new_pass" required>
        	<br>
        	<br>
        	<input type="submit" value="Submit" class="pass warning">
  		</form>
  		</div>
      </section>
    </div>
  </div>


  <script type="text/javascript">

    document.getElementById("bookTableButton").addEventListener("click", bookTableFn);
    document.getElementById("showTableButton").addEventListener("click", displayTableFn);

    function bookTableFn() { //working properly
        // alert("in book table");
        var obj2=
        {
          xhr:new XMLHttpRequest(),
          t:0,
          getData:function(){
            // alert(nameOfRestaurant);
            this.xhr.onreadystatechange=this.showData;
            this.xhr.open("GET","bookTable.php",true);
            this.xhr.send();
            // alert("getData");
          },
          showData:function(){
            if(this.readyState==4 && this.status==200){
              // alert(this.responseText);
              nor = document.getElementById("restaurantSelection").value; //name of restaurant
              var file2 = this.responseText;
              // alert(file2);
              // alert(nor); //working
              var updatedFileContents = updateJsonFile(nor, file2);
            } //end of this.readystate == 4
          } //end of showdata function
        }//end of obj
    obj2.getData();
  } //end of bookTableFn
    function updateJsonFile(fileName, fileContents) {
    
      // var res=this.responseText;
      // var fileContents = this.responseText;
      // obj.t = fileContents.split(";")[1];
      // fileContents = fileContents.split(";")[0];
      
      var objRes = JSON.parse(fileContents);
      objKeys = Object.keys(objRes); //get the keys

      for (var key in objKeys) { 
        var cityName = objRes[objKeys[key]]["city"]; 
        var countryName = objKeys[key];
        var numberOfSeatsAvailable = objRes[objKeys[key]]["no_of_seats"]; 
        if(objKeys[key] == fileName) {
            if(parseInt(objRes[objKeys[key]]["no_of_seats"]) > 0)
              objRes[objKeys[key]]["no_of_seats"] = (parseInt(objRes[objKeys[key]]["no_of_seats"])-1).toString();
            else //0 tables left condition
              alert("reservation could not be made");
            break;
        } 
      }
       var finalString = JSON.stringify(objRes);
       // alert(finalString)
       //write file somehow using php

      //make request
      var http = new XMLHttpRequest();
      var params = finalString;
      var url = 'writeToFile.php?fc='+finalString;
      http.open('GET', url, true);

      //Send the proper header information along with the request
      // http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

      http.onreadystatechange = function() {//Call a function when the state changes.
          if(http.readyState == 4 && http.status == 200) {
              alert("posted");
          }
      }
      http.send();
            //end of request

      // } //end of for
    }//end of updateJsonFile
    function displayTableFn() 
    {
      // alert("here");
      var obj=
      {
        xhr:new XMLHttpRequest(),
        t:0,
        getData:function(){
          this.xhr.onreadystatechange=this.showData;
          this.xhr.open("GET","getSeatsServer.php?time="+this.t,true);
          this.xhr.send();
          // alert("getData");
        },
        showData:function(){
          if(this.readyState==4 && this.status==200){
            // alert("in show data");
            var res=this.responseText;
            var fileContents = this.responseText;
            obj.t = fileContents.split(";")[1];
            fileContents = fileContents.split(";")[0];
            var objRes = JSON.parse(fileContents);
            // alert(objRes);
            // alert("sa");
            // document.getElementById("selectionNumber").innerHTML=fileContents;
            objKeys = Object.keys(objRes);
            // alert(objKeys);
            // create a table
            var body = document.body;
            tbl  = document.createElement('table');
            tbl.className = "settings";
            tbl.style.width  = '500px';
            tbl.style.border = '1px solid black';
                        var tr = tbl.insertRow();
                        var td1 = tr.insertCell();
                        var td2 = tr.insertCell();
                        var td3 = tr.insertCell();
                        td1.appendChild(document.createTextNode("City Name"));
                        td2.appendChild(document.createTextNode("Country Name"));
                        td3.appendChild(document.createTextNode("Number Of Seats Available"));

            console.log(objKeys);
            for (var key in objKeys) { 
              var cityName = objRes[objKeys[key]]["city"]; 
              var countryName = objKeys[key];
              var numberOfSeatsAvailable = objRes[objKeys[key]]["no_of_seats"]; 
              var tr = tbl.insertRow();
              var td1 = tr.insertCell();
              var td2 = tr.insertCell();
              var td3 = tr.insertCell();
              td1.appendChild(document.createTextNode(cityName));
              td2.appendChild(document.createTextNode(countryName));
              td3.appendChild(document.createTextNode(numberOfSeatsAvailable));
              // alert(objRes[key]);
            }
            document.getElementById("content").appendChild(tbl);
            obj.getData(obj.t);
          } //end of this.readystate == 4
        } //end of showdata function
      }//end of obj 
      obj.getData();
    };

  </script>
</body>
</html>
