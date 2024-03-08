<?php require(ROOT . 'app/model/Pet.php'); ?>
<?php require(ROOT .'app/controller/base.php'); ?>

<?php
$Pet = new Pet();

//pet register

if (isset($_POST['user_email'])) {
    $register_result = $Pet->register_pet($_POST['user_email'], $_POST['species_id'], $_POST['breed_id'], $_POST['name'], $_POST['gender'], $_POST['age'], $_POST['nature'], $_POST['food_preference'], $_POST['vaccination_status'], $_POST['extra_info'], $_POST['availability']);
    if ($register_result == 1) {
        echo "<script> alert('Pet Registered Successfully!'); </script>";
    } else {
        echo "<script> alert('Registration of pet unsuccesful please try again!'); </script>";
    }
}
?>
