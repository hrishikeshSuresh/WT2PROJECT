<html>
<head>
<title>Bibilography</title>
<link href='https://fonts.googleapis.com/css?family=Indie Flower' rel='stylesheet'>
<style>

body {
  font-family: "Lato", sans-serif;
  background-color: lightblue;
}

p,h1
{
 font-family: 'Indie Flower';font-size: 32px;
}
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontent {
    color: white;
    display: none;
    padding: 50px;
    text-align: center;
}

#London {background-color:red;}
#Paris {background-color:green;}
#Tokyo {background-color:blue;}
#Oslo {background-color:orange;}

span
{
  color:#6666ff
}
</style>
</head>
<body>
  <h1 style="margin-left:550px;color:#6666ff"><b>Bibliography</b></h1>
  <h1>This project was a combined effort of <span>Krishna Sidhrth</span> ,<span>Jai Agarwal</span> and <span>Hemant Kumar</span></h1>

  <div id="London" class="tabcontent">
    <h3>TEXTBOOK</h3>
    <p><a href="https://www.mynextbook.in/programming-the-world-wide-web-7th--edition/9789332518827?gclid=EAIaIQobChMI74Ouuv3E1wIVxwgqCh0HUQYdEAYYASABEgLVQ_D_BwE" target="_blank">PROGRAMMING THE WORLD WIDE WEB</a> </p>
    <P>BY -Robert Sebesta  </P>
  </div>

  <div id="Paris" class="tabcontent">
    <h3>TEXTBOOK</h3>
    <p><a href="http://www.ebooksbucket.com/uploads/itprogramming/javascript/Learning_PHP__MySQL___JavaScript_With_jQuery__CSS___HTML5__4th_Edition.pdf" target="_blank">LEARNING JAVA SCRIPT,PHP AND CSS</a> </p>
    <P>BY -Robin Nixon  </P>
  </div>

  <div id="Tokyo" class="tabcontent">
    <h3><a href="https://www.w3schools.com/" target="_blank">w3 SCHOOLS</a></h3>
    <p>HELPFUL FOR JS AND CSS </p>
  </div>

  <div id="Oslo" class="tabcontent">
    <h3><a href="http://www.imdb.com/" target="_blank">IMDB</a></h3>
    <p>HELPFUL FOR A VALIDATING OUR REVIEW </p>
  </div>

  <button class="tablink" onclick="openCity('London', this, 'red')" id="defaultOpen">TEXT 1</button>
  <button class="tablink" onclick="openCity('Paris', this, 'green')">TEXT 2</button>
  <button class="tablink" onclick="openCity('Tokyo', this, 'blue')">ONLINE MATERIAL 1</button>
  <button class="tablink" onclick="openCity('Oslo', this, 'orange')">ONLINE MATERIAL 2</button>

  <script>
  function openCity(cityName,elmnt,color) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(cityName).style.display = "block";
      elmnt.style.backgroundColor = color;

  }
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script>

<br/>
<br/>
<br/>
<br/>
<p style="font-size:27px;color:#6666ff">As mentionsed in the  above <u>Tabbed menu</u> we have collected resources for building our website
 from various credible sources like books like "Programming the www" BY Robert sebesta and
 Learning php java and sql BY Robin Nixon <br>We worked on this project for a time period of one maonth   </p>

<h1 style="margin-left:400px">THANK YOU FOR VISITING OUR SITE </h1>

</body>

</html>
