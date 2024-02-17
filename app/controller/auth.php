<?php require('app/config/Database.php'); ?>
<?php require('app/model/user.php'); ?>

<?php 
// Login
// Login
if(isset($_POST['loginEmail']) && isset($_POST['loginPassword'])){
    $login_result = login($_POST['loginEmail'], $_POST['loginPassword'], $connection);

    if($login_result != null){
        $_SESSION['loggedInStatus'] = true;
        $_SESSION['user'] = $login_result;
    }
}

// Signup
// Signup
if(isset($_POST['signupEmail'])){
    $signup_result = signup($_POST['signupName'], $_POST['signupEmail'], $_POST['signupPassword'], $_POST['signupPhone'], $_POST['signupDob'], $_POST['signupCity'], $connection);
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
}
?>