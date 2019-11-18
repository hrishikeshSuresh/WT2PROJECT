var slideIndex6= 0;
showSlides6();

function showSlides6() {
    var i;
    //var slides = document.getElementsByClassName("one");
    var slides = document.querySelectorAll("#six");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex6++;
    if (slideIndex6 > slides.length) {slideIndex6 = 1}
    slides[slideIndex6-1].style.display = "block";
    interval = setTimeout(showSlides6, 3000); // Change image every 2 seconds
}

function Details6(id){
  for(i=0;i<document.querySelector(".C6").children.length;i++){
    document.querySelector(".C6").children[i].children[1].setAttribute("class","");
  }
  document.querySelector(".C6").children[id-1].children[1].setAttribute("class","details");
}
