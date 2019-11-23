
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

function Suggest(){
      /*
       *Maintain a reference to the current object
       */
      var object = this;
      this.timer = null;
      this.search = null;
      this.container = null;
      this.url = null;
      this.xhr = new XMLHttpRequest();
      this.getTerm = function() {
        this.search = document.getElementById("search");
        this.container = document.getElementById("container");
        /*
         * to invoke the send search function only if the user
         * pauses for a second     
         */
        if(this.timer) {
          clearTimeout(this.timer);
        }
        this.timer = setTimeout(this.sendTerm,1000);
      };
      this.sendTerm = function() {
        object.url = "suggest.php?term=" + object.search.value;
        /*
         * check if the search term is available in cache
         * i.e. Local Storage
         */
        if(localStorage.getItem(object.url)) {
          var cacheRes = JSON.parse(localStorage.getItem(object.url))
          object.populateFood(cacheRes);
          console.log(localStorage.getItem(object.url));
          console.log("from browser cache")
        }
        else {
          object.xhr.onreadystatechange=object.showResult;
          console.log(object.search.value);
          console.log(this);
          object.xhr.open("GET",object.url,true);
          object.xhr.send();
        }
      };
      this.showResult = function() {
        if(this.readyState == 4 && this.status == 200) {
          var res=this.responseText;
          var resO=JSON.parse(res);
          /*
           *Store search result in cache
           */
          localStorage.setItem(object.url, res);
          if(resO.length == 0) {
            object.search.style.backgroundColor = "red";
            object.search.style.fontStyle = "italics";
          }
          else {
            object.populateFood(resO);  
          }
        }
      };
      this.populateFood = function(resO) {
        object.container.innerHTML = "";
        for(f in resO) {
          var itemDiv = document.createElement("div");
          itemDiv.innerHTML = resO[f];
          itemDiv.className = "fooditem";
          itemDiv.onclick = object.setFood;
          object.container.appendChild(itemDiv);
          console.log(object.container);

          var tableElement = document.getElementById("")
        }
        object.container.style.display = "block";
        console.log(object.container)
      };
      this.setFood = function(e){
        object.search.value = e.target.innerHTML;
        object.search.style.backgroundColor = "white";
        object.container.style.display = "none"
        object.container.innerHTML = "";
      };
    }
    var obj = new Suggest();

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
