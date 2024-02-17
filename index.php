<?php session_start() ?>

<?php require('app/config/Database.php'); ?>
<?php require('app/model/user.php'); ?>






<?php 

if(isset($_REQUEST['loginEmail']) && isset($_REQUEST['loginPassword'])){
    $login_result = login($_REQUEST['loginEmail'], $_REQUEST['loginPassword'], $connection);

    if($login_result != null){
        $_SESSION['loggedInStatus'] = true;
        $_SESSION['user'] = $login_result;
    }
}

?>


<?php 

if(isset($_SESSION['loggedInStatus']) && $_SESSION['loggedInStatus'] == true){
     require('app/resources/view/home.php');
 }
else{
    require('app/resources/view/authentication.php');
}
 ?>