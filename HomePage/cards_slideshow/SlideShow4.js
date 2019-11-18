var slideIndex4 = 0;
showSlides4();

function showSlides4() {
    var i;
    //var slides = document.getElementsByClassName("one");
    var slides = document.querySelectorAll("#four");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex4++;
    if (slideIndex4 > slides.length) {slideIndex4 = 1}
    slides[slideIndex4-1].style.display = "block";
    interval = setTimeout(showSlides4, 3000); // Change image every 2 seconds
}

function Details4(id){
  for(i=0;i<document.querySelector(".C4").children.length;i++){
    document.querySelector(".C4").children[i].children[1].setAttribute("class","");
  }
  document.querySelector(".C4").children[id-1].children[1].setAttribute("class","details");
}
