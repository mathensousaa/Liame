const slidePage = document.querySelector(".slidepage");
const firtNextBtn = document.querySelector(".nextBtn");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const nextBtnThird = document.querySelector(".prev-2");

firtNextBtn.addEventListener("click", function(){
  slidePage.style.marginLeft = "-100%";
});
