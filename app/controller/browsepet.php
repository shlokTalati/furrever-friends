<?php require(ROOT . 'app/model/Pet.php'); ?>

<?php

$Pet = new Pet();

$petData = $Pet->get_pet_data();

$species_data = $Pet->get_all_data('species');
$breed_data = $Pet->get_all_data('breed');
?>


<?php require(ROOT .'app/controller/base.php'); ?>
