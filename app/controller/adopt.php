<?php
require(ROOT . "/app/model/Pet.php");

// Instantiate the Pet model
$Pet = new Pet();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $adopter_id = $_SESSION['user']['id']; // Assuming you have user ID stored in session
    $pet_id = $_POST['pet_id'];
    $owner_id = ''; // You need to define how to get owner_id
    $address = $_POST['address'];
    $reason_to_adopt = $_POST['reason'];
    $past_experience = $_POST['experience'];
    $home_description = $_POST['home_description'];
    $existing_pets = isset($_POST['pet_option']) && $_POST['pet_option'] == 'yes' ? $_POST['pet_count'] : 0;
    $existing_children = isset($_POST['children_option']) && $_POST['children_option'] == 'yes' ? $_POST['children_count'] : 0;
    $status = 'pending'; // Assuming you have a status field and defaulting to 'pending'

    // Instantiate AdoptionModel
    

    // Call the new_adoption function to insert data
    $result = $Pet->new_adoption($adopter_id, $pet_id, $owner_id, $address, $reason_to_adopt, $past_experience, $home_description, $existing_pets, $existing_children, $status);

    // Check the result and redirect accordingly
    if ($result) {
        // Redirect to success page or any other appropriate action
        header("Location: success.php");
        exit;
    } else {
        // Handle error, maybe redirect back to form with error message
        echo "Error occurred while processing the form.";
    }
}

?>

<?php require(ROOT .'app/controller/base.php'); ?>


