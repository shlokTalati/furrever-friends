
<?php
require(ROOT . "/app/model/Pet.php");
require(ROOT . "/app/model/User.php");
require(ROOT . "/app/model/Mailer.php");

$Pet = new Pet();
$User = new User();
$Mailer = new Mailer();
?>

<?php
//LOGIC TO APPROVE AND REJECT REQUESTS
if (isset($_GET['adoptionId'])) {


    // Get Adoption Data
    $adoptionData = $Pet->get_data_by_constraint('adoption', 'id', $_GET['adoptionId'], true);

    //Get Adopter Data
    $adopterData = $Pet->get_data_by_constraint('user', 'email', $adoptionData[0]['adopter_id'], true);

    $petData = $Pet->get_data_by_constraint('listed_pet', 'id', $adoptionData[0]['pet_id'], true);

    // Get Owner's email
    $ownerEmail = $_SESSION['user']['email'];
    
    //Approve Request Logic
    //Approve Request Logic
    if (isset($_GET['action']) && $_GET['action'] == 'Approve') {
        $result = $Pet->approve_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);
        if ($result == 1) {

            echo "<script> alert('Email Sent,Thank you for using our platform') </script>";
            // Send email to adopter
            $adopterSubject = "Adoption Request Approved";
            $adopterMessage = "Your adoption request for the following pet has been approved. <br><br>
            
            Pet Details:<br>
            Name:  {$petData[0]['name']} <br>
            Gender: {$petData[0]['gender']}<br>
            Age: {$petData[0]['age']}<br>
            Previous Owner Email: $ownerEmail<br><br>            
            
            Thank You for using our Website";
            $Mailer->smtp_mailer($adoptionData[0]['adopter_id'], $adopterSubject, $adopterMessage);


            // Send email to owner
            $ownerSubject = "Your Pet is Adopted";
            $ownerMessage = "Congratulations Your Pet {$petData[0]['name']} has been Adopted by {$adopterData[0]['name']}!!!";
            $Mailer->smtp_mailer($ownerEmail, $ownerSubject, $ownerMessage);
        }
    }

    //Reject Request Logic
    //Reject Request Logic

    elseif (isset($_GET['action']) && $_GET['action'] == 'Reject') {
        $result = $Pet->reject_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);

        if($result == 1){
            echo "<script> alert('Email Sent,Thank you for using our platform') </script>";
            $adopterSubject = "Adoption Request Rejected";
            $adopterMessage = "Your adoption request has been Rejected.";
            $Mailer->smtp_mailer($adoptionData[0]['$adopter_id'], $adopterSubject, $adopterMessage);
        }
        
    } else {
        header("Location: /petmarket/requests");
    }


    // Redirect after processing
    if ($result == 1) {
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
} else {
    $requestData = 0;
}

?>

<?php require(ROOT . 'app/controller/base.php'); ?>