<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurrEver Friends</title>
    <!-- Bootstrap CSS -->
    <?php
    //  require(ROOT .'app/resources/css/styles.bundle.php')
    ?>
    <link rel="stylesheet" href="/furreverfriends/app/resources/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

</head>
<body>
    <!-- Header -->
<?php 
require(ROOT .'app/resources/component/header.php'); 
?>

    <main class="container">

        <?php require(ROOT. 'app/resources/view/' . $viewPath) ?>

    </main>


<!-- Footer -->
<?php 
require(ROOT .'app/resources/component/footer.php') 
?>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="/furreverfriends/app/resources/js/script.js"></script>

</body>
</html>
