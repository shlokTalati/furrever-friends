<?php require(ROOT . 'app/model/Pet.php'); ?>

<?php
$Pet = new Pet();



//PET REGISTER 

if (isset($_POST['listpet'])) {
    $targetDir = "app/images/"; // Directory where you want to store the uploaded files
    $img_name = basename($_FILES['pet_photo']['name']);
    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    $new_img_name = uniqid() . "." . $img_ex;
    $target_file = $targetDir . $new_img_name;
    
    if (move_uploaded_file($_FILES['pet_photo']['tmp_name'], $target_file)) {
        $register_result = $Pet->register_pet(
            $_SESSION['user']['email'],
            $_POST['list_species_id'],
            $_POST['list_breed_id'],
            $_POST['list_name'],
            $_POST['list_gender'],
            $_POST['list_age'],
            $_POST['list_nature'],
            $_POST['list_food_preference'],
            $_POST['list_vaccination_status'],
            $_POST['list_extra_info'],
            true,
            $target_file // Pass the path of the uploaded photo
        );

        if ($register_result == 1) {
            echo "<script> alert('Pet Registered Successfully!'); </script>";
        } else {
            echo "<script> alert('Registration of pet unsuccessful, please try again!'); </script>";
        }
    } else {
        $em = "Failed to upload file";
    }
}


$species_data = $Pet->get_all_data('species');
$breed_data = $Pet->get_all_data('breed');
?>



<?php require(ROOT .'app/controller/base.php'); ?>




