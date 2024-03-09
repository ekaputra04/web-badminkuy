import "./bootstrap";

// hamburger

window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;
    const scrollToTop = document.querySelector("#scroll-to-top");

    if (window.scrollY > fixedNav) {
        header.classList.add("navbar-fixed");
        scrollToTop.classList.remove("hidden");
    } else {
        header.classList.remove("navbar-fixed");
        scrollToTop.classList.add("hidden");
    }
};

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");
hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});
