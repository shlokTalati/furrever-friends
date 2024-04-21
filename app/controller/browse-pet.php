<?php require(ROOT . 'app/model/Pet.php'); ?>

<?php

$Pet = new Pet();

//Gets Pet Data where the user_email is NOT the same as the current user
$petData = $Pet->get_data_by_constraint('listed_pet', 'user_email', $_SESSION['user']['email'], false);


$species_data = $Pet->get_all_data('species');
$breed_data = $Pet->get_all_data('breed');
?>


<?php require(ROOT .'app/controller/base.php'); ?>
