<?php require(ROOT . 'app/model/Pet.php'); ?>

<?php
$Pet = new Pet();

//pet register

if (isset($_POST['list_name'])) {
    $register_result = $Pet->register_pet($_SESSION['user']['email'], $_POST['list_species_id'], $_POST['list_breed_id'], $_POST['list_name'], $_POST['list_gender'], $_POST['list_age'], $_POST['list_nature'], $_POST['list_food_preference'], $_POST['list_vaccination_status'], $_POST['list_extra_info'], true);
    if ($register_result == 1) {
        echo "<script> alert('Pet Registered Successfully!'); </script>";
    } else {
        echo "<script> alert('Registration of pet unsuccesful please try again!'); </script>";
    }
}

$species_data = $Pet->get_all_data('species');
$breed_data = $Pet->get_all_data('breed');
?>



<?php require(ROOT .'app/controller/base.php'); ?>
