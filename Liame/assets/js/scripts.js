const slidePage = document.querySelector(".slidepage");
const firtNextBtn = document.querySelector(".nextBtn");
const prevBtnSec = document.querySelector(".prev-1");

firtNextBtn.addEventListener("click", function(){
  slidePage.style.marginLeft = "-100%";
});

prevBtnSec.addEventListener("click", function(){
  slidePage.style.marginLeft = "-200%";
});