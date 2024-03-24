var logoutBtnNav = document.getElementById("logoutBtnNav");
var userBtnNav = document.getElementById("userBtnNav");

let login = document.querySelector(".login-form");

let navbar = document.querySelector(".header .navbar");

document.querySelector("#login-btn").onclick = () => {
    login.classList.toggle('active');
    navbar.classList.remove('active');
}

// window.onscroll = () => {
//     login.classList.remove('active');
//     navbar.classList.remove('active');
// }

var swiper = new Swiper(".gallery-slider", {
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    spaceBetween:20,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        0:{
            slidesPerView:1,
        },
        700:{
            slidesPerView:2,
        },
    }
});