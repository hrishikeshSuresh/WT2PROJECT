
document.cookie = "";

function fun1()
{
  window.open("gameofthrones.html");
  document.cookie = "genre=Ft;";
}

function fun2()
{
  window.open("friends.html");
  document.cookie = "genre=Dt;";
}


function fun3()
{
  //alert("df");
  window.open("preacher.html");
  document.cookie = "genre=Ft;";
}

function fun4()
{
  window.open("houseofcards.html");
  document.cookie = "genre=Dt;";
}


function fun5()
{
  window.open("breakingbad.html");
  document.cookie = "genre=Dt;";
}


function fun6()
{
  window.open("himym.html");
  document.cookie = "genre=Ot;";
}


function fun7()
{
  window.open("suits.html");
  document.cookie = "genre=Dt;";
}


function fun8()
{
  window.open("siliconvalley.html");
  document.cookie = "genre=Ot;";
}


function fun9()
{
  window.open("flash.html");
  document.cookie = "genre=At;";
}



var d1 = document.querySelector("#gam");
var d2 = document.querySelector("#fri");
var d3 = document.querySelector("#pre");
var d4 = document.querySelector("#hou");
var d5 = document.querySelector("#bre");
var d6 = document.querySelector("#him");
var d7 = document.querySelector("#sui");
var d8 = document.querySelector("#sil");
var d9 = document.querySelector("#fla");

d1.addEventListener("click", fun1, false);

d2.addEventListener("click", fun2, false);
d3.addEventListener("click", fun3, false);
d4.addEventListener("click", fun4, false);
d5.addEventListener("click", fun5, false);
d6.addEventListener("click", fun6, false);
d7.addEventListener("click", fun7, false);
d8.addEventListener("click", fun8, false);
d9.addEventListener("click", fun9, false);
