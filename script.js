const burger = document.querySelector(".burger");
const menuList = document.querySelector(".menu-list");
const headerMenu = document.querySelector(".header-menu");

burger.addEventListener("click", () => {
    burger.classList.toggle("active");
    menuList.classList.toggle("active");
    headerMenu.classList.toggle("active");
})
document.querySelectorAll(".menu-link").forEach(n => n.addEventListener("click", () => {
    burger.classList.remove("active");
    menuList.classList.remove("active");
    headerMenu.classList.remove("active");
}))

let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("slide");
  if (n > slides.length) {
    slideIndex = 1
    }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}