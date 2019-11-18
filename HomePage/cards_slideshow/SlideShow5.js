var slideIndex5 = 0;
showSlides5();

function showSlides5() {
    var i;
    //var slides = document.getElementsByClassName("one");
    var slides = document.querySelectorAll("#five");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex5++;
    if (slideIndex5 > slides.length) {slideIndex5 = 1}
    slides[slideIndex5-1].style.display = "block";
    interval = setTimeout(showSlides5, 3000); // Change image every 2 seconds
}

function Details5(id){
  for(i=0;i<document.querySelector(".C5").children.length;i++){
    document.querySelector(".C5").children[i].children[1].setAttribute("class","");
  }
  document.querySelector(".C5").children[id-1].children[1].setAttribute("class","details");
}
