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
        font-family: Arial, sans-serif;
        /* Use your preferred font */
      }

      .container {
        max-width: 600px;
        /* Adjust as needed */
        width: 100%;
        padding: 0 20px;
      }

      /* Main section styles */
      .container.main {
        display: flex;
        justify-content: center;
        /* align-items: center; */
        /* Remove this line */
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

  <body>
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
          <br>
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
    <br>
    <form action="/petmarket/authentication" method="post" onsubmit="return validateSignupForm()">
      <div class="form-group">
        <input type="text" class="form-control" id="signupName" placeholder="Name" name="signupName" required>
      </div>
      <div class="form-group">
        <input type="email" class="form-control" id="signupEmail" placeholder="Enter email" name="signupEmail" required>
      </div>
      <div class="form-group">
      <input type="text" class="form-control" id="signupPhone" placeholder="Contact Number" name="signupPhone" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" maxlength="10" required style="-moz-appearance: textfield; -webkit-appearance: none;">

      </div>
      <div class="form-group">
        <input type="password" class="form-control" id="signupPassword" placeholder="Password" name="signupPassword" required>
      </div>
      <div class="form-group">
        <input type="date" class="form-control" id="signupDob" name="signupDob" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" id="signupCityInput" placeholder="City" name="signupCity" required>
      </div>
      <!-- Add dropdown for states -->
      <!-- <div class="form-group">
        <select class="form-control" id="signupState" name="signupState" onchange="populateCities()">
          <option value="" selected disabled>Select State</option>
          Add your states here
          <option value="New York">New York</option>
          <option value="California">California</option>
          Add more states as needed
        </select> -->
      </div>
      <!-- Add dropdown for cities -->
      <!-- <div class="form-group" id="citiesContainer" style="display:none;">
        <select class="form-control" id="signupCitySelect" name="signupCitySelect">
          <option value="" selected disabled>Select City</option>
          Cities will be populated based on the selected state
        </select>
      </div> -->
      <br>
      <input type="submit" class="btn btn-outline-light" value="Sign Up">
    </form>
  </div>
</div>


    </main>
    <br><br>
    <?php require(ROOT . 'app/resources/component/footer.php') ?>
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
      // Function to validate signup form
      
    // Function to validate signup form
    function validateSignupForm() {
      var name = document.getElementById("signupName").value.trim();
      var email = document.getElementById("signupEmail").value.trim();
      var phone = document.getElementById("signupPhone").value.trim();
      var password = document.getElementById("signupPassword").value.trim();
      var dob = document.getElementById("signupDob").value.trim();
      var city = document.getElementById("signupCity").value.trim();

      // Simple validation, you can enhance it as per your requirement
      if (name === "" || email === "" || phone === "" || password === "" || dob === "" || city === "") {
        alert("All fields are required");
        return false;
      }

      // Validate email format
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email address");
        return false;
      }

      // Validate phone number format (assuming 10 digits)
      var phoneRegex = /^\d{10}$/;
      if (!phoneRegex.test(phone)) {
        alert("Please enter a valid 10-digit phone number");
        return false;
      }

      // Placeholder for password strength validation
      // Example: Check if the password has at least 8 characters
      if (password.length < 8) {
        alert("Password must be at least 8 characters long");
        return false;
      }

      // Placeholder for date format validation
      // Example: Check if the date is in yyyy-mm-dd format
      var dateRegex = /^\d{4}-\d{2}-\d{2}$/;
      if (!dateRegex.test(dob)) {
        alert("Please enter a valid date in yyyy-mm-dd format");
        return false;
      }

      // Placeholder for city name validation
      // var validCities = ["New York", "Los Angeles", "Chicago", "Houston", "Phoenix"]; // Example list of valid cities
      // if (!validCities.includes(city)) {
      //   alert("Please enter a valid city name");
      //   return false;
      // }

  //     return true; // Form will be submitted if all fields are filled and validated
  //   }


  //   // Define cities for each state
  // const stateCities = {
  //   "New York": ["New York City", "Buffalo", "Rochester"],
  //   "California": ["Los Angeles", "San Francisco", "San Diego"]
  //   // Add more states and their cities as needed
  // };

  // Function to populate cities based on the selected state
  // function populateCities() {
  //   var stateSelect = document.getElementById("signupState");
  //   var citySelect = document.getElementById("signupCitySelect");
  //   var selectedState = stateSelect.value;
  //   var cities = stateCities[selectedState];

  //   // Clear previous options
  //   citySelect.innerHTML = '';

  //   // Populate cities if state is selected
  //   if (selectedState) {
  //     cities.forEach(function(city) {
  //       var option = document.createElement("option");
  //       option.text = city;
  //       option.value = city;
  //       citySelect.appendChild(option);
  //     });
  //     // Show cities container
  //     document.getElementById("citiesContainer").style.display = "block";
  //   } else {
  //     // Hide cities container if no state is selected
  //     document.getElementById("citiesContainer").style.display = "none";
  //   }



  
  }
  </script>

  </body>

  </html>