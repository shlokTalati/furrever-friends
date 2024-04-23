<?php
require(ROOT . "/app/model/Pet.php");
$Pet = new Pet();
?>

<?php

if(isset($_GET['adoptionId'])){

    if(isset($_GET['action']) && $_GET['action'] == 'Approve'){
            $result = $Pet->approve_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);
    } else if(isset($_GET['action']) && $_GET['action'] == 'Reject'){
            $result = $Pet->reject_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);
    }
    else{
        header("Location: /petmarket/requests");
    }

    if($result == 1){
        header("Location: /petmarket/requests?success=true");
    } else {
        header("Location: /petmarket/requests?success=false");
    }
}

// Get all the pending requests for the current user

$requestData = $Pet->get_pending_requests($_SESSION['user']['email']);

if ($requestData != null) {
    for ($i = 0; $i < count($requestData); $i++) {
        $temp = $Pet->get_data_by_constraint('listed_pet', 'id', $requestData[$i]['pet_id'], true);
        $requestData[$i]['pet_name'] = $temp[0]['name'];
        $requestData[$i]['photo_path'] = $temp[0]['photo_path'];

    }
}
else{
    $requestData = 0;
}



?>


<?php require(ROOT .'app/controller/base.php'); ?>