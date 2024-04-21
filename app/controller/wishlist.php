<?php 

require(ROOT . 'app/model/Pet.php');
$Pet = new Pet();


if (isset($_GET['id'])) {
    $petId = $_GET['id'];
    $wishlistResult = $Pet->add_to_wishlist($_SESSION['user']['email'], $petId);
    
    if ($wishlistResult == 1) {
        header("Location: /petmarket/wishlist");
    } else {
        echo "<script> alert('Failed to add pet to wishlist!'); </script>";
    }
}
?>

<?php

$wishlistRaw = $Pet->get_wishlist($_SESSION['user']['email']);

$wishlistData = array();

foreach ($wishlistRaw as $rawData) {
    $wishlistData[] = $Pet->get_pet_data_by_id($rawData['pet_id']);
}
?>


<?php require(ROOT .'app/controller/base.php'); ?>