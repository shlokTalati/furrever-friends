<?php
require(ROOT . "/app/model/Pet.php");



// Instantiate the Pet model
$petModel = new Pet();

// Retrieve the pet ID from the query parameter
$petId = isset($_GET['id']) ? $_GET['id'] : null;

// Ensure the ID is valid
if ($petId === null || !is_numeric($petId)) {
    echo "Invalid pet ID.";
    exit;
}

// Fetch detailed information about the pet using the ID
$petDetails = $petModel->getPetDetailsById($petId);

// Check if pet details are found
if ($petDetails) {
    // Include the view file to display the pet details
    include(ROOT . '/view/adoptpet.php');
} else {
    // Handle the case when no pet details are found
    echo "Pet details not found.";
}


$species_data = $petModel->get_all_data('species');

$breed_data = $petModel->get_all_data('breed');

function getNameById($id, $data) {
    foreach ($data as $item) {
        if ($item['id'] == $id) {
            return $item['name'];
        }
    }
    return "Breed not found"; // Return a message if the ID doesn't match any breed
}

$breed_name = getNameById($petDetails['breed_id'],$breed_data);
$species_name = getNameById($petDetails['species_id'],$species_data);
?>

<?php require(ROOT .'app/controller/base.php'); ?>


