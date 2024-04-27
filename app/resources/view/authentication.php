  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurrEver Friends</title>
    <!-- Link to your external CSS file for the color scheme -->
    <link rel="stylesheet" href="/furreverfriends/app/resources/css/style.css">
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
        width: 100%;
        padding: 0 20px;
        margin: auto;
        /* Add this line to horizontally center the container */
        text-align: center;
        /* Add this line to center-align the form fields */
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

      <div id="loginContainer" style="margin:80px 0px 0px 0px">
        <div class="container">
          <h1>Login</h1>
          <br>
          <form action="/furreverfriends/authentication" method="post">
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
          <form action="/furreverfriends/authentication" method="post" onsubmit="return validateSignupForm()">
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
            <!-- <div class="form-group">
              <input type="text" class="form-control" id="signupCityInput" placeholder="City" name="signupCity" required>
            </div> -->
            <!-- Add dropdown for states -->
            <div class="form-group">
              <select class="form-control" id="signupState" name="signupState" onchange="populateCities()">
                <option value="" selected disabled>Select State</option>
                Add your states here
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Odisha">Odisha</option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Delhi">Delhi</option>
                <option value="Puducherry">Puducherry</option>

              </select>
            </div>
            <!-- Add dropdown for cities -->
            <div class="form-group" id="citiesContainer" style="display:none;">
              <select class="form-control" id="signupCitySelect" name="signupCity">
                <option value="" selected disabled>Select City</option>
                Cities will be populated based on the selected state
              </select>
            </div>
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
        var validCities = ["New York", "Los Angeles", "Chicago", "Houston", "Phoenix"]; // Example list of valid cities
        if (!validCities.includes(city)) {
          alert("Please enter a valid city name");
          return false;
        }

        return true; // Form will be submitted if all fields are filled and validated
      }


      // Define cities for each state
      const stateCities = {
        "Andhra Pradesh": ["Visakhapatnam", "Vijayawada", "Tirupati", "Guntur", "Nellore"],
        "Arunachal Pradesh": ["Itanagar", "Naharlagun", "Pasighat", "Tawang", "Ziro"],
        "Assam": ["Guwahati", "Dibrugarh", "Silchar", "Jorhat", "Tezpur"],
        "Bihar": ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Darbhanga"],
        "Chhattisgarh": ["Raipur", "Bhilai", "Bilaspur", "Durg", "Raigarh"],
        "Goa": ["Panaji", "Margao", "Vasco da Gama", "Mapusa", "Ponda"],
        "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar"],
        "Haryana": ["Faridabad", "Gurgaon", "Panipat", "Ambala", "Yamunanagar"],
        "Himachal Pradesh": ["Shimla", "Mandi", "Dharamshala", "Solan", "Kullu"],
        "Jharkhand": ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro", "Hazaribagh"],
        "Karnataka": ["Bengaluru", "Mysuru", "Hubballi", "Belagavi", "Mangaluru"],
        "Kerala": ["Thiruvananthapuram", "Kochi", "Kozhikode", "Thrissur", "Kollam"],
        "Madhya Pradesh": ["Bhopal", "Indore", "Jabalpur", "Gwalior", "Ujjain"],
        "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad"],
        "Manipur": ["Imphal", "Thoubal", "Bishnupur", "Churachandpur", "Ukhrul"],
        "Meghalaya": ["Shillong", "Tura", "Nongstoin", "Jowai", "Williamnagar"],
        "Mizoram": ["Aizawl", "Lunglei", "Saiha", "Champhai", "Serchhip"],
        "Nagaland": ["Kohima", "Dimapur", "Mokokchung", "Tuensang", "Wokha"],
        "Odisha": ["Bhubaneswar", "Cuttack", "Rourkela", "Berhampur", "Sambalpur"],
        "Punjab": ["Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Bathinda"],
        "Rajasthan": ["Jaipur", "Jodhpur", "Udaipur", "Kota", "Ajmer"],
        "Sikkim": ["Gangtok", "Namchi", "Mangan", "Gyalshing", "Singtam"],
        "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem"],
        "Telangana": ["Hyderabad", "Warangal", "Nizamabad", "Karimnagar", "Khammam"],
        "Tripura": ["Agartala", "Udaipur", "Dharmanagar", "Kailasahar", "Ambassa"],
        "Uttar Pradesh": ["Lucknow", "Kanpur", "Agra", "Varanasi", "Allahabad"],
        "Uttarakhand": ["Dehradun", "Haridwar", "Rishikesh", "Nainital", "Roorkee"],
        "West Bengal": ["Kolkata", "Asansol", "Siliguri", "Durgapur", "Bardhaman"],
        "Andaman and Nicobar Islands": ["Port Blair", "Diglipur", "Mayabunder", "Rangat", "Havelock Island"],
        "Chandigarh": ["Chandigarh"],
        "Dadra and Nagar Haveli": ["Silvassa", "Dadra", "Naroli", "Khadoli"],
        "Daman and Diu": ["Daman", "Diu", "Dunetha", "Dabhel", "Devka"],
        "Lakshadweep": ["Kavaratti", "Andrott", "Minicoy", "Kalpeni", "Kadmat"],
        "Delhi": ["New Delhi", "Noida", "Gurgaon", "Faridabad", "Ghaziabad"],
        "Puducherry": ["Puducherry", "Karaikal", "Yanam", "Mahe", "Ozhukarai"]
      };

      // Function to populate cities based on the selected state
      function populateCities() {
        var stateSelect = document.getElementById("signupState");
        var citySelect = document.getElementById("signupCitySelect");
        var selectedState = stateSelect.value;
        var cities = stateCities[selectedState];

        // Clear previous options
        citySelect.innerHTML = '';

        // Populate cities if state is selected
        if (selectedState) {
          cities.forEach(function(city) {
            var option = document.createElement("option");
            option.text = city;
            option.value = city;
            citySelect.appendChild(option);
          });
          // Show cities container
          document.getElementById("citiesContainer").style.display = "block";
        } else {
          // Hide cities container if no state is selected
          document.getElementById("citiesContainer").style.display = "none";
        }




      }
    </script>

  </body>

  </html>