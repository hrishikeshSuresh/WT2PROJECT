var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    //var slides = document.getElementsByClassName("one");
    var slides = document.querySelectorAll("#one");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    interval = setTimeout(showSlides, 3000); // Change image every 2 seconds
}

function Details(id){
  for(i=0;i<document.querySelector(".C1").children.length;i++){
    document.querySelector(".C1").children[i].children[1].setAttribute("class","");
  }
  document.querySelector(".C1").children[id-1].children[1].setAttribute("class","details");
}
