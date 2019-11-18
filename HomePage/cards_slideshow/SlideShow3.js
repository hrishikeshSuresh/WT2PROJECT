var slideIndex3 = 0;
showSlides3();

function showSlides3() {
    var i;
    //var slides = document.getElementsByClassName("one");
    var slides = document.querySelectorAll("#three");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex3++;
    if (slideIndex3 > slides.length) {slideIndex3 = 1}
    slides[slideIndex3-1].style.display = "block";
    interval = setTimeout(showSlides3, 3000); // Change image every 2 seconds
}

function Details3(id){
  for(i=0;i<document.querySelector(".C3").children.length;i++){
    document.querySelector(".C3").children[i].children[1].setAttribute("class","");
  }
  document.querySelector(".C3").children[id-1].children[1].setAttribute("class","details");
}
