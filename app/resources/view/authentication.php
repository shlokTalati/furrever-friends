<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FurEver Friends</title>
  <!-- Link to your external CSS file for the color scheme -->
  <link rel="stylesheet" href="/petmarket/app/resources/css/style.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #f0f0f0;
      font-family: Arial, sans-serif; /* Use your preferred font */
    }
    .container {
      max-width: 600px; /* Adjust as needed */
      width: 100%;
      padding: 0 20px;
    }
    /* Main section styles */
    .container.main {
      display: flex;
      justify-content: center;
      /* align-items: center; */ /* Remove this line */
      flex-direction: column;
      margin-top: 20px;
    }
    /* Form styles */
    .form-group {
      margin-bottom: 20px;
    }
    .form-control {
      padding: 15px;
      border: 1px solid var(--main);
      border-radius: 20px;
      width: 100%;
      box-sizing: border-box;
      font-size: 16px;
    }
    .btn-outline-light {
      padding: 15px 25px;
      background-color: var(--main);
      color: var(--white);
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .btn-outline-light:hover {
      background-color: green;
      color: var(--white);
    }
  </style>
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
  <!-- login and signin -->
  <main class="container main">
    <!-- Login Container -->
    <div id="loginContainer">
      <div class="container">
        <h1>Login</h1>
        <form action="/petmarket/authentication" method="post">
          <div class="form-group">
            <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" name="loginEmail" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="loginPassword" placeholder="Password" name="loginPassword" required>
          </div>
          <br>
          <input type="submit" class="btn btn-outline-light" value="Login">
        </form>
      </div>
    </div>
    <!-- Signup Container -->
    <div id="signupContainer" style="display: none;">
      <div class="container">
        <h1>Sign Up</h1>
        <form action="/petmarket/authentication" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="signupName" placeholder="Name" name="signupName" required>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" id="signupEmail" placeholder="Enter email" name="signupEmail" required>
          </div>
          <div class="form-group">
            <input type="number" class="form-control" id="signupPhone" placeholder="Contact Number" name="signupPhone" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="signupPassword" placeholder="Password" name="signupPassword" required>
          </div>
          <div class="form-group">
            <input type="date" class="form-control" id="signupDob" name="signupDob" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="signupCity" placeholder="City" name="signupCity" required>
          </div>
          <br>
          <input type="submit" class="btn btn-outline-light" value="Sign Up">
        </form>
      </div>
    </div>
  </main>
  <br><br>
  <?php require(ROOT .'app/resources/component/footer.php') ?>
  <script>
    var loginContainer = document.getElementById("loginContainer");
    var signupContainer = document.getElementById("signupContainer");
    function toggleLogin() {
      loginContainer.style.display = "block";
      signupContainer.style.display = "none";
      // Nulls all the values of previous tab
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
