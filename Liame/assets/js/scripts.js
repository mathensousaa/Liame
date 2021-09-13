const slidePage = document.querySelector(".slidepage");
const firtNextBtn = document.querySelector(".nextBtn");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");

firtNextBtn.addEventListener("click", function(){
  slidePage.style.marginLeft = "-100%";
});

nextBtnSec.addEventListener("click", function(){
  slidePage.style.marginLeft = "-200%";
});

nextBtnThird.addEventListener("click", function(){
  slidePage.style.marginLeft = "-300%";
});

prevBtnSec.addEventListener("click", function(){
  slidePage.style.marginLeft = "-200%";
});

prevBtnThird.addEventListener("click", function(){
  slidePage.style.marginLeft = "-300%";
});
