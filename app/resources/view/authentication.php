
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurEver Friends</title>

    <link rel="stylesheet" href="/petmarket/app/resources/css/style.css">
    <style>
      body{
        display: flex;
        flex-direction: column;
        min-height: 100vh;
      }
    </style>
</head>
<body class="bg-LIGHT">
    

<header class="header">

<a href="#" class="logo"><i class="fas fa-paw"></i> FurrEver friEnd </a>

<nav class="navbar">


            <button class="btn" id="loginBtnNav" onclick="toggleLogin()">Login</button>
            <button class="btn" id="signupBtnNav" onclick="toggleSignup()">Signup</button>


</nav>
</header>




<!-- Basically, this main tag renders the entire Main Views of different pages based on the request URI. -->

<main class="container">
 
 <!-- Login Container -->
  <!-- Login Container -->
  <div class="" id="loginContainer">
    <div class="container px-5">
      <h1 class="text-light">Login</h1>
      <br><br>
      <form action="/petmarket/authentication" method="post">

        <div class="form-floating mb-4">
          <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com" name="loginEmail"
            required>
          <label for="loginEmail">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="loginPassword" placeholder="Password" name="loginPassword"
            required>
          <label for="loginPass">Password</label>
        </div>
        <br><br>
        <input type="submit" class="btn btn-outline-light" value="Login">


      </form>
    </div>
  </div>


  <!-- Signup Container -->
  <!-- Signup Container -->
  <div class="d-none" id="signupContainer">
    <div class="container px-5">
      <h1 class="text-light">Sign Up</h1>
      <br><br>
      <form action="/petmarket/authentication" method="post">

        <div class="form-floating mb-4">
          <input type="text" class="form-control" id="signupName" placeholder="Name" name="signupName" required>
          <label for="signupName">Name</label>
        </div>

        
        <div class="form-floating mb-4">
          <input type="email" class="form-control" id="signupEmail" placeholder="name@example.com" name="signupEmail"
            required>
          <label for="signupEmail">Email address</label>
        </div>

        <div class="form-floating mb-4">
          <input type="number" maxlength="10" class="form-control" id="signupPhone" placeholder="Contact Number"
            name="signupPhone" required>
          <label for="signupPhone">Contact Number</label>
        </div>

        
        <div class="form-floating mb-4">
          <input type="password" class="form-control" id="signupPassword" placeholder="Password" name="signupPassword" required>
          <label for="signupPassword">Password</label>
        </div>

        <div class="form-floating mb-4">
          <input type="date" class="form-control" id="signupDob" placeholder="Date of Birth" name="signupDob" required>
          <label for="signupDob">Date of Birth</label>
        </div>


        <div class="form-floating">
          <input type="text" class="form-control" id="signupCity" placeholder="City" name="signupCity" required>
          <label for="signupCity">City</label>
        </div>
        <br><br>
        <input type="submit" class="btn btn-outline-light" value="Sign Up">


      </form>
    </div>
  </div>

</main>


<!-- Footer -->
<?php require(ROOT .'app/resources/component/footer.php') ?>

<script>
  
var loginBtnNav = document.getElementById("loginBtnNav");
var signupBtnNav = document.getElementById("signupBtnNav");

var loginContainer = document.getElementById("loginContainer");
var signupContainer = document.getElementById("signupContainer");


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
    document.getElementById("signupPhone").value = "";
    document.getElementById("signupPassword").value = "";
    document.getElementById("signupDob").value = "";
    document.getElementById("signupCity").value = "";
        
        
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
</script>

</body>
</html>