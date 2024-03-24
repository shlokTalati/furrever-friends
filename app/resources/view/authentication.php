<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FurEver Friends</title>

  <!-- Link to your external CSS file for the color scheme -->
  <link rel="stylesheet" href="/petmarket/app/resources/css/style.css">
</head>

<body style="display: flex; flex-direction: column; min-height: 100vh; background-color: #f0f0f0;">

  <header class="header">
    <a href="#" class="logo"> <!-- Assuming the logo color is defined in your CSS file -->
      <i class="fas fa-paw"></i> FurrEver Friends
    </a>
    <nav class="navbar">
      <button class="btn" onclick="toggleLogin()">Login</button>
      <button class="btn" onclick="toggleSignup()">Signup</button>
    </nav>
  </header>

  <main class="container" style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 20px;">

    <!-- Login Container -->
    <div id="loginContainer" style="display: block;">
      <div class="container px-5">
        <h1 class="text-light">Login</h1>
        <form action="/petmarket/authentication" method="post">
          <div class="form-group">
            <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" name="loginEmail" required style="padding: 15px; border: 1px solid #ccc; border-radius: 20px; width: 100%; box-sizing: border-box; font-size: 16px;">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="loginPassword" placeholder="Password" name="loginPassword" required style="padding: 15px; border: 1px solid #ccc; border-radius: 20px; width: 100%; box-sizing: border-box; font-size: 16px;">
          </div>
          <br>
          <input type="submit" class="btn btn-outline-light" value="Login" onmouseover="buttonHover(this)" onmouseout="buttonHover(this)" style="padding: 15px 25px; border: 1px solid #555; background-color: transparent; color: #555; cursor: pointer; transition: background-color 0.3s ease;">
        </form>
      </div>
    </div>

    <!-- Signup Container -->
    <div id="signupContainer" style="display: none;">
      <div class="container px-5">
        <h1 class="text-light">Sign Up</h1>
        <form action="/petmarket/authentication" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="signupName" placeholder="Name" name="signupName" required style="padding: 15px; border: 1px solid #ccc; border-radius: 20px; width: 100%; box-sizing: border-box; font-size: 16px;">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="signupEmail" placeholder="Enter email" name="signupEmail" required style="padding: 15px; border: 1px solid #ccc; border-radius: 20px; width: 100%; box-sizing: border-box; font-size: 16px;">
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="signupPhone" placeholder="Contact Number" name="signupPhone" required style="padding: 15px; border: 1px solid #ccc; border-radius: 20px; width: 100%; box-sizing: border-box; font-size: 16px;">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="signupPassword" placeholder="Password" name="signupPassword" required style="padding: 15px; border: 1px solid #ccc; border-radius: 20px; width: 100%; box-sizing: border-box; font-size: 16px;">
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="signupDob" name="signupDob" required style="padding: 15px; border: 1px solid #ccc; border-radius: 20px; width: 100%; box-sizing: border-box; font-size: 16px;">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="signupCity" placeholder="City" name="signupCity" required style="padding: 15px; border: 1px solid #ccc; border-radius: 20px; width: 100%; box-sizing: border-box; font-size: 16px;">
          </div>
          <br>
          <input type="submit" class="btn btn-outline-light" value="Sign Up" onmouseover="buttonHover(this)" onmouseout="buttonHover(this)" style="padding: 15px 25px; border: 1px solid #555; background-color: transparent; color: #555; cursor: pointer; transition: background-color 0.3s ease;">
        </form>
      </div>
    </div>

  </main>
<br><br>
  <?php 
require(ROOT .'app/resources/component/footer.php') 
?>

  <script>
    var loginContainer = document.getElementById("loginContainer");
    var signupContainer = document.getElementById("signupContainer");

    function toggleLogin() {
      loginContainer.style.display = "block";
      
      signupContainer.style.display = "none";

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
      loginContainer.style.display = "none";
      signupContainer.style.display = "block";
    }

    // Function to change button color on hover
    function buttonHover(btn) {
      btn.style.backgroundColor = btn.style.backgroundColor === "transparent" ? "#bbb" : "transparent";
      btn.style.color = btn.style.color === "#555" ? "#fff" : "#555";
    }
  </script>

</body>

</html>
