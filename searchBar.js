//alert("searchbar file");

set = ["schindler's list", "inception", "kingsman: the golden circle",
"the godfather", "the intern", "pulp fiction", "taxi driver", "reservoir dogs",
"american history x", "inglorious basterds", "fight club", "guardians of the galaxy",
"game of thrones", "friends","preacher", "house of cards", "breaking bad",
"how i met your mother", "suits", "silicon valley", "flash", "movies", ""];

btn = document.querySelector("#searchlogo");
searchbar = document.querySelector(".search_text");

//alert(btn);
btn.addEventListener("click", fun1, false);


function funOpenSearch(searchValue)
{
  switch(searchValue)
  {
    case "schindler's list" : window.open("schindler.html"); break;
    case "inception" : window.open("movietemplete.html"); break;
    case "kingsman: the golden circle" : window.open("kingsmangoldencircle.html"); break;
    case "the godfather" : window.open("godfather.html"); break;
    case "the intern" : window.open("intern.html"); break;
    case "pulp fiction" : window.open("pulpfiction.html"); break;
    case "taxi driver" : window.open("taxidriver.html"); break;
    case "reservoir dogs" : window.open("reservoir.html"); break;
    case "american history x" : window.open("americanx.html"); break;
    case "inglorious basterds" : window.open("inglorious.html"); break;
    case "fight club" : window.open("fightclub.html"); break;
    case "guardians of the galaxy" : window.open("guardiansofthegalaxy.html"); break;
    case "game of thrones" : window.open("gameofthrones.html"); break;
    case "friends" : window.open("friends.html"); break;
    case "preacher" : window.open("preacher.html"); break;
    case "house of cards" : window.open("houseofcards.html"); break;
    case "breaking bad" : window.open("breakingbad.html"); break;
    case "how i met your mother" : window.open("himym.html"); break;
    case "suits" : window.open("suits.html"); break;
    case "silicon valley" : window.open("siliconvalley.html"); break;
    case "flash" : window.open("flash.html");
  }
}
function fun1()
{
	flag = 0;
  //alert(searchbar.value);

  for(i in set){
    var setVal = set[i];
    //alert(setVal);
    if(setVal==searchbar.value.toLowerCase()){
      //alert("found");
      //funOpenSearch(searchbar.value);
      flag = 1;
    }
  }

  if(flag)
  	funOpenSearch(searchbar.value.toLowerCase());
  else 
  	alert("Movie or TV show does not exist!");

}
