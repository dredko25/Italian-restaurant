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
