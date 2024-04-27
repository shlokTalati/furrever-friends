<?php
require(ROOT . "/app/model/Pet.php");
require(ROOT . "/app/model/Mailer.php");
// Instantiate the Pet model
$Pet = new Pet();
$Mailer = new Mailer();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $petData = $Pet->get_data_by_constraint('listed_pet', 'id', $_POST['pet_id'], true);
    echo $_POST['pet_id'];
    // $petData = $Pet->get_pet_data_by_id($_POST['pet_id']); 

    $adopter_id = $_SESSION['user']['email']; // Assuming you have user ID stored in session
    $pet_id = $_POST['pet_id'];
    // Assuming you have a way to retrieve owner_id
    $owner_id = $petData[0]['user_email'];

    $adopterData = $Pet->get_data_by_constraint('user', 'email', $adopter_id, true);
    $address = $_POST['address'] . ", " . $_POST['city']. ", " . $_POST['state']. ", " . $_POST['zipcode'];
    $reason_to_adopt = $_POST['reason'];
    $past_experience = $_POST['experience'];
    $home_description = $_POST['home_description'];
    $existing_pets = isset($_POST['pet_option']) && $_POST['pet_option'] == 'yes' ? $_POST['pet_count'] : 0;
    $existing_children = isset($_POST['children_option']) && $_POST['children_option'] == 'yes' ? $_POST['children_count'] : 0;
    $status = 'pending'; // Assuming you have a status field and defaulting to 'pending'


    // Call the new_adoption function to insert data
    $result = $Pet->new_adoption($adopter_id, $pet_id, $owner_id, $address, $reason_to_adopt, $past_experience, $home_description, $existing_pets, $existing_children, $status);
    // Check the result and redirect accordingly
    if ($result) {
        $adoptionData = $Pet->get_data_by_constraint('adoption', 'id', $_GET['adoptionId'], true);

        // Send email to owner
        $adopterSubject = "Pet Adoption Request";
        $adopterMessage = "There has been a Pet Adoption Request for the pet ({$petData[0]['name']}) listed by you.<br><br>"
        . "ADOPTION DETAILS:<br>"
        . "Pet Details: {$petData[0]['name']}<br>"
        . "Adopter Name: {$adopterData[0]['name']}<br>"
        . "Adopter Phone: {$adopterData[0]['phone']}<br>"
        . "Adopter Email: {$adopter_id}<br>"
        . "Reason to Adopt: {$reason_to_adopt}<br>"
        . "Past Experience: {$past_experience}<br>"
        . "Address: {$address}<br>";
        $Mailer->smtp_mailer($owner_id, $adopterSubject, $adopterMessage);
        // Redirect to success page or any other appropriate action
        header("Location: /furreverfriends/browsepet");
        exit;
    } else {
        // Handle error, maybe redirect back to form with error message
        echo "Error occurred while processing the form.";
    }
}


require(ROOT . "app/controller/base.php");
