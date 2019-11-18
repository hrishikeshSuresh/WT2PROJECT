<html>
<head>
<link  rel="stylesheet" type="text/css" href="got.project.css">
<title> Game Of Thrones </title>

</head>

<body style="background-color:#4f4d4f" background="got.jpg">
<h1>Game Of Thrones </h1>

<div style="max-width:800px;max-height:300px">
  <img class="mySlides" src="got6.jpg" style="width:600px;height:300px">
  <img class="mySlides" src="got1.jpg" style="width:600px;height:300px">
  <img class="mySlides" src="got2.jpg" style="width:600px;height:300px">
  <img class="mySlides" src="got8.jpg" style="width:600px;height:300px">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script>



<p><b>Nine noble families fight for control over the mythical lands of Westeros,</br>
 while a forgotten race returns after being dormant for thousands of years.</b></p>
<p><b><u><span>Creators:</span></u>
  <a href="https://www.google.co.in/search?q=david+benioff&rlz=1C1CHBF_enIN713IN713&oq=david+be&aqs=chrome.2.69i57j0l5.6366j0j7&sourceid=chrome&ie=UTF-8" target="_blank">David Benioff</a>,
<a href="https://www.google.co.in/search?q=db+weiss&rlz=1C1CHBF_enIN713IN713&oq=db+weiss+&aqs=chrome..69i57j0l5.2422j0j7&sourceid=chrome&ie=UTF-8" target="_blank">   D.B. Weiss</br></a>
<span><u>Stars:</u></span><a href="https://www.google.co.in/search?q=emilia+clarke&rlz=1C1CHBF_enIN713IN713&oq=emil&aqs=chrome.0.69i59j69i57j35i39j0l3.3890j0j7&sourceid=chrome&ie=UTF-8" target="_blank"> Emilia Clarke</a>,
<a href="https://www.google.co.in/search?q=peter+dinklage&rlz=1C1CHBF_enIN713IN713&oq=pe&aqs=chrome.4.69i57j69i60l3j35i39l2.3551j0j7&sourceid=chrome&ie=UTF-8" target="_blank"> Peter Dinklage</a>,
<a href="https://www.google.co.in/search?q=kit+harington&rlz=1C1CHBF_enIN713IN713&oq=kit&aqs=chrome.1.69i57j0j69i61j0l3.3786j0j7&sourceid=chrome&ie=UTF-8" target="_blank"> Kit Harington</a></b></p>


<button type="button" onclick="alert('downloading ....')">DOWNLOAD</button>
<button type="button" onclick="alert('streaming ....')">STREAM IN HD</button>

</body>
</html>
