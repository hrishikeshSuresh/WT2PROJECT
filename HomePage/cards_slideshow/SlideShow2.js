var slideIndex2 = 0;
showSlides2();

function showSlides2() {
    var i;
    //var slides = document.getElementsByClassName("one");
    var slides = document.querySelectorAll("#two");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex2++;
    if (slideIndex2 > slides.length) {slideIndex2 = 1}
    slides[slideIndex2-1].style.display = "block";
    interval = setTimeout(showSlides2, 3000); // Change image every 2 seconds
}

function Details2(id){
  for(i=0;i<document.querySelector(".C2").children.length;i++){
    document.querySelector(".C2").children[i].children[1].setAttribute("class","");
  }
  document.querySelector(".C2").children[id-1].children[1].setAttribute("class","details");
}
