<?php require(ROOT . 'app/model/Pet.php'); ?>

<?php

$Pet = new Pet();

//Gets Pet Data where the user_email is NOT the same as the current user
$petData = $Pet->get_browse_pet_data($_SESSION['user']['email']);


$species_data = $Pet->get_all_data('species');
$breed_data = $Pet->get_all_data('breed');
?>


<?php require(ROOT .'app/controller/base.php'); ?>
