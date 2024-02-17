
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
    
    // function loggedInStatus(loginStatus){
        
    //     if(loginStatus == true){
    //         loginBtnNav.classList.add("d-none");
    //         signupBtnNav.classList.add("d-none");
    //         logoutBtnNav.classList.remove("d-none");
    //         userBtnNav.classList.remove("d-none");
    //         console.log("Login Status is TRUE");
            
    //     }
    //     else{
    //         loginBtnNav.classList.remove("d-none");
    //         signupBtnNav.classList.remove("d-none");
    //         logoutBtnNav.classList.add("d-none");        
    //         userBtnNav.classList.add("d-none");        
    //         console.log("Login Status is FALSE");
    //     }
    // }

    function updateNote(noteid){
        const myModal = new bootstrap.Modal('#updateModal');
        myModal.show();
        const tempData = JSON.parse(tempVariable.textContent);
        console.log(tempData[noteid]);
        updateId.value = tempData[noteid][0];
        updateTitle.value= tempData[noteid][1];
        updateDescription.value= tempData[noteid][2];


    }
    