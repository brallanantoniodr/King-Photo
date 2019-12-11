var imagesToLoad = 0;
var ul = null;
var btnLeft = null;
var btnRight = null;
var circles = null;
window.onload = function(e){
  var arrImages = document.getElementsByClassName('lazzyimage');
  btnLeft = document.getElementsByClassName('leftBtn')[0];
  btnRight = document.getElementsByClassName('rightBtn')[0];
  circles = document.getElementsByClassName('circle');

  for(var j = 0 ; j < circles.length; j++){
    circles[j].addEventListener('click',circle_clicked);
  }

  btnLeft.addEventListener('click', function(e){
    SlideDirection = -1;
    clearTimeout(timerRef);
    nextSlide();
  });//btnLeft Click

  btnRight.addEventListener('click', function(e){
    SlideDirection = 1;
    clearTimeout(timerRef);
    nextSlide();
  });//btnLeft Click

  imagesToLoad = arrImages.length - 1;
  for (var i = 0; i< arrImages.length; i++){
      arrImages[i].src = arrImages[i].getAttribute("data-src");
      arrImages[i].style.display ="inline";
      arrImages[i].addEventListener('load', function(e){
        imagesToLoad--;
        verifyLoadComplete();
      });

      ul = document.getElementById("slider_slide");
    }
}

var SlideDirection = 1; // -1
var timerRef = null;
var sliding = false;
var currentSlide = 0;

function circle_clicked(e){
  currentSlide = parseInt(e.target.getAttribute("data-index"));
  clearTimeout(timerRef);
  slide(currentSlide);
  timerRef=setTimeout(nextSlide, 3000);
}


function verifyLoadComplete(){
  if(!imagesToLoad){
    setTimeout(nextSlide, 3000);
  }
}

function nextSlide(){
  currentSlide += SlideDirection;
  if (currentSlide > 3){
    currentSlide = 0;
  }
  if(currentSlide < 0){
    currentSlide = 3
  }
  slide(currentSlide);
  timerRef=setTimeout(nextSlide, 3000);
}

function slide(currentSlide){
    if(ul){
      ul.style.left = (currentSlide * -100) + "vw";
      for(var i = 0 ; i<circles.length; i++){
        circles[i].className = (i==currentSlide)?"circle selected":"circle";
      }
    }
}
