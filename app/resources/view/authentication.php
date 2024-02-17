<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php require('app/resources/css/styles.bundle.php') ?>

</head>
<body class="bg-dark">
    
<!-- Header -->
<?php require('app/resources/component/header.php'); ?>


<!-- Basically, this main tag renders the entire Main Views of different pages based on the request URI. -->

<main class="container">
 
 <!-- Login Container -->
  <!-- Login Container -->
  <div class="container mt-5 pt-5" id="loginContainer">
    <div class="container px-5">
      <h1 class="text-light">Login</h1>
      <br><br>
      <form action="/petmarket/auth" method="post">

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
  <div class="container mt-5 pt-5 d-none" id="signupContainer">
    <div class="container px-5">
      <h1 class="text-light">Sign Up</h1>
      <br><br>
      <form action="/notes.io/auth" method="post">

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
          <input type="number" maxlength="10" class="form-control" id="signupContactNo" placeholder="Contact Number"
            name="signupContactNo" required>
          <label for="signupContactNo">Contact Number</label>
        </div>

        
        <div class="form-floating mb-4">
          <input type="password" class="form-control" id="signupPass" placeholder="Password" name="signupPass" required>
          <label for="signupPass">Password</label>
        </div>

        <div class="form-floating mb-4">
          <input type="date" class="form-control" id="signupDob" placeholder="Date of Birth" name="signupDob">
          <label for="signupDate">Date of Birth</label>
        </div>


        <div class="form-floating">
          <input type="text" class="form-control" id="signupCity" placeholder="City" name="signupPass" required>
          <label for="signupPass">City</label>
        </div>
        <br><br>
        <input type="submit" class="btn btn-outline-light" value="Sign Up">


      </form>
    </div>
  </div>

</main>








<!-- Footer -->
<?php require('app/resources/component/footer.php') ?>

<?php require('app/resources/js/scripts.bundle.php') ?>


<?php 
  
  if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == true) {

    echo "<script> loggedInStatus(true); </script>";
}
else{
    echo "<script> loggedInStatus(false); </script>";
}

?>
</body>
</html>