<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurrEver Friends</title>
    <!-- Bootstrap CSS -->
    <?php require(ROOT .'app/resources/css/styles.bundle.php') ?>

</head>
<body>
    <!-- Header -->
<?php require(ROOT .'app/resources/component/header.php'); ?>

    <main class="container">

        <?php require(ROOT. 'app/resources/view/' . $viewPath) ?>

    </main>


<!-- Footer -->
<?php require(ROOT .'app/resources/component/footer.php') ?>

<?php require(ROOT .'app/resources/js/scripts.bundle.php') ?>
</body>
</html>
