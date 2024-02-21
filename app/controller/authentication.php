<?php require(ROOT .'app/model/User.php'); ?>

<?php 
$User = new User();
// Login
// Login
if(isset($_POST['loginEmail']) && isset($_POST['loginPassword'])){
    $login_result = $User->login($_POST['loginEmail'], $_POST['loginPassword']);

    if($login_result != null){
        $_SESSION['loggedInStatus'] = true;
        $_SESSION['user'] = $login_result;
        header("Location: /petmarket/home");
    }
}

// Signup
// Signup
if(isset($_POST['signupEmail'])){
    $signup_result = $User->signup($_POST['signupName'], $_POST['signupEmail'], $_POST['signupPassword'], $_POST['signupPhone'], $_POST['signupDob'], $_POST['signupCity']);
    if($signup_result == true){
        echo "<script> alert('Signup Successful!'); </script>";
    }
    else{
        echo "<script> alert('Signup Failed!'); </script>";
    }
}


// Logout
// Logout
if($_SERVER['REQUEST_URI'] == '/petmarket/logout'){
    $_SESSION['loggedInStatus'] = false;
    $_SESSION['user'] = null;
    session_destroy();
    header("Location: /petmarket/auth");
}


//Authentication View (Login/Signup)
require(ROOT .'app/resources/view/authentication.php');
?>