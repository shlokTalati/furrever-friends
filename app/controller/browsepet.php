<?php require(ROOT . 'app/model/Pet.php'); ?>

<?php

$Pet = new Pet();

$petData = $Pet->get_pet_data();
?>


<?php require(ROOT .'app/controller/base.php'); ?>
