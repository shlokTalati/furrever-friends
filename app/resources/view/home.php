<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php require('app/resources/css/styles.bundle.php') ?>

</head>
<body class="bg-light">
    
<!-- Header -->
<?php require('app/resources/component/header.php'); ?>


<!-- Basically, this main tag renders the entire Main Views of different pages based on the request URI. -->

<main class="container">
 
 <h1> This is Home Page </h1>

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