<?php
require(ROOT . "/app/model/Pet.php");

// Instantiate the Pet model
$Pet = new Pet();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $petData = $Pet->get_data_by_constraint('listed_pet', 'id', $_POST['pet_id'], true);
    echo $_POST['pet_id'];
    // $petData = $Pet->get_pet_data_by_id($_POST['pet_id']); 

    $adopter_id = $_SESSION['user']['email']; // Assuming you have user ID stored in session
    $pet_id = $_POST['pet_id'];
    // Assuming you have a way to retrieve owner_id
    $owner_id = $petData[0]['user_email']; 
    $address = $_POST['address'].$_POST['city'].$_POST['state'].$_POST['zipcode'];
    $reason_to_adopt = $_POST['reason'];
    $past_experience = $_POST['experience'];
    $home_description = $_POST['home_description'];
    $existing_pets = isset($_POST['pet_option']) && $_POST['pet_option'] == 'yes' ? $_POST['pet_count'] : 0;
    $existing_children = isset($_POST['children_option']) && $_POST['children_option'] == 'yes' ? $_POST['children_count'] : 0;
    $status = 'pending'; // Assuming you have a status field and defaulting to 'pending'

    var_dump($petData);
    // Call the new_adoption function to insert data
    $result = $Pet->new_adoption($adopter_id, $pet_id, $owner_id, $address, $reason_to_adopt, $past_experience, $home_description, $existing_pets, $existing_children, $status);
    echo $result;
    // Check the result and redirect accordingly
    if ($result) {
        // Redirect to success page or any other appropriate action
        header("Location: /petmarket/browsepet");
        exit;
    } else {
        // Handle error, maybe redirect back to form with error message
        echo "Error occurred while processing the form.";
    }
}


require(ROOT. "app/controller/base.php");
?>
