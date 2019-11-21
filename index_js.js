
var ck = document.cookie;
//alert(recomendationSet);
//alert(ck);

ck = ck.split(';')[0];
var value = ck.split('=')[1];


var genreName1 = value;



if(genreName1 == 'A')
  funA();
else if(genreName1 == 'D')
  funO();
else if(genreName1 == 'C')
  funC();
else if(genreName1 == 'H')
  funH();


else if(genreName1 == 'At')
  funAt();
else if(genreName1 == 'Ot')
  funOt();
else if(genreName1 == 'Ft')
  funFt();
else if(genreName1 == 'Dt')
  funDt();


img1 = document.querySelector("#img1");
img2 = document.querySelector("#img2");

//alert(flix);

function funA(){
  //alert("Entered  A");
  img1.setAttribute("src", "images/recomendation/Movies/action1.jpg");
  img2.setAttribute("src", "Images/recomendation/Movies/action2.jpg");

}

function funC(){
    //alert("Entered function C");
    img1.setAttribute("src", "images/recomendation/Movies/crime1.jpg");
    img2.setAttribute("src", "Images/recomendation/Movies/crime2.jpg");
}


function funO(){
  //alert("Entered function O");
  img1.setAttribute("src", "images/recomendation/Movies/drama1.jpg");
  img2.setAttribute("src", "Images/recomendation/Movies/drama2.jpg");

}



function funH(){
  //alert("Entered function H");
  img1.setAttribute("src", "images/recomendation/Movies/history1.jpg");
  img2.setAttribute("src", "Images/recomendation/Movies/history2.jpg");
}

/*************************************

***
TV Shows
***************************************/


function funAt(){
  //alert("Entered function At");
  img1.setAttribute("src", "images/recomendation/tvShows/action1.jpg");
  img2.setAttribute("src", "Images/recomendation/tvShows/action2.jpg");
}


function funDt(){
  //alert("Entered function Dt");
  img1.setAttribute("src", "images/recomendation/tvShows/drama1.jpg");
  img2.setAttribute("src", "Images/recomendation/tvShows/drama2.jpg");

}


function funOt(){
  //alert("Entered function Ot");
  img1.setAttribute("src", "images/recomendation/tvShows/comedy1.jpg");
  img2.setAttribute("src", "Images/recomendation/tvShows/comedy2.jpg");
}


function funFt(){
  //alert("Entered function Ft");
  img1.setAttribute("src", "images/recomendation/tvShows/fantasy1.jpg");
  img2.setAttribute("src", "Images/recomendation/tvShows/fantasy2.jpg");
}
