let login = document.querySelector(".login-form");

document.querySelector("#login-btn").onclick = () =>{
    login.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector(".header .navbar");

document.querySelector('#menu-btn').onclick = () =>{
    login.classList.remove('active');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    login.classList.remove('active');
    navbar.classList.remove('active');
}

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
})



// Old Javascript


var loginContainer = document.getElementById("loginContainer");
var signupContainer = document.getElementById("signupContainer");

var loginBtnNav = document.getElementById("loginBtnNav");
var signupBtnNav = document.getElementById("signupBtnNav");
var userBtnNav = document.getElementById("userBtnNav");
var logoutBtnNav = document.getElementById("logoutBtnNav");

const tempVariable = document.getElementById("tempDataVariable");
var updateId = document.getElementById("updateId");
var updateTitle = document.getElementById("updateTitle");
var updateDescription = document.getElementById("updateDescription");



function toggleLogin() {
    
    //Switches between Login Form and Signup Form
    loginContainer.classList.remove("d-none");
    signupContainer.classList.add("d-none");
    
    //Changes active status of Login and Signup button on toggle
        loginBtnNav.classList.add("active");
        signupBtnNav.classList.remove("active");
        
        //Nulls all the values of previous tab
        document.getElementById("signupName").value = "";
        document.getElementById("signupEmail").value = "";
        document.getElementById("signupPass").value = "";
        
        
        console.log("Login Toggled")
    }
    
    function toggleSignup() {

        //Switches between Login Form and Signup Form
        loginContainer.classList.add("d-none");
        signupContainer.classList.remove("d-none");
        
        //Changes active status of Login and Signup button on toggle
        loginBtnNav.classList.remove("active");
        signupBtnNav.classList.add("active");
        
        //Nulls all the values of previous tab
        document.getElementById("loginEmail").value = "";
        document.getElementById("loginPassword").value = "";
        
        
        console.log("Signup Toggled");
        
        
    }

    function updateNote(noteid){
        const myModal = new bootstrap.Modal('#updateModal');
        myModal.show();
        const tempData = JSON.parse(tempVariable.textContent);
        console.log(tempData[noteid]);
        updateId.value = tempData[noteid][0];
        updateTitle.value= tempData[noteid][1];
        updateDescription.value= tempData[noteid][2];


    }
    