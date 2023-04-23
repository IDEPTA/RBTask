
//Burger
let Burger = document.querySelector(".burger");
let burgerLines = document.querySelectorAll(".burger-line");
let navBar = document.querySelector(".nav");
let body = document.querySelector("body")

Burger.addEventListener("click", () => {
  burgerLines[0].classList.toggle("burger-line-hide")
  burgerLines[1].classList.toggle("burger-line-active-one")
  burgerLines[2].classList.toggle("burger-line-active-two")
  burgerLines[3].classList.toggle("burger-line-hide")
  navBar.classList.toggle("active-nav")
  body.classList.toggle("active-body");
})
//swiper
const swiper = new Swiper('.swiper', {
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
});
//popup
let Buttons = document.querySelectorAll(".Button");
let close = document.querySelector(".close");
let popUp = document.querySelector(".popup");
body.addEventListener("click",(e)=>{
  switch(e.target.className){
    case "Button":
      popUp.classList.add("popup-active")
      break;
    case "close":
      popUp.classList.remove("popup-active")
  }
  
})