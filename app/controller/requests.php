
<?php
require(ROOT . "/app/model/Pet.php");
$Pet = new Pet();
?>


<?php
//sending mail to user phpMailer
include('smtp/PHPMailerAutoload.php');

function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	//$mail->SMTPDebug = 2; 
	$mail->Username = "fureverfriendorg@gmail.com";
	$mail->Password = "uimyqydhwddmixfe";
	$mail->SetFrom("fureverfriendorg@gmail.com");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		echo $mail->ErrorInfo;
	}else{
		return 'Sent';
	}
}
?>



<?php
//LOGIC
if (isset($_GET['adoptionId'])) {

    if (isset($_GET['action']) && $_GET['action'] == 'Approve') {
        $result = $Pet->approve_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);
        if ($result == 1) {
            // Get adopter's email
            $adopterEmail = $_SESSION['user']['email'];
            if ($adopterEmail) {
                // Send email to adopter
                $subject = "Adoption Request Approved";
                $message = "Your adoption request has been approved.Thank You for using our Website";
                smtp_mailer($adopterEmail, $subject, $message);
            }
        }
    } 
    elseif (isset($_GET['action']) && $_GET['action'] == 'Reject') {
        $result = $Pet->reject_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);
        $subject = "Adoption Request Rejected";
        $message = "Your adoption request has been Rejected.";
        smtp_mailer($adopterEmail, $subject, $message);
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


if (isset($_GET['adoptionId'])) {

    if (isset($_GET['action']) && $_GET['action'] == 'Approve') {
        $result = $Pet->approve_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);
        if ($result == 1) {
            // Get adopter's email
            $userEmail = $_SESSION['user']['email'];
            if ($userEmail) {
                echo"<script>alert('Email Sent')</script>";
                // Send email to adopter
                $subject = "Pet Adopted";
                $message = "Congratulations The Pet Listed By you has been Adopted!!!";
                smtp_mailer($userEmail, $subject, $message);
            }
        }
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




<?php

// if(isset($_GET['adoptionId'])){

//     if(isset($_GET['action']) && $_GET['action'] == 'Approve'){
//             $result = $Pet->approve_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);
//     } else if(isset($_GET['action']) && $_GET['action'] == 'Reject'){
//             $result = $Pet->reject_adoption($_GET['adoptionId'], $_GET['petId'], $_SESSION['user']['email']);
//     }
//     else{
//         header("Location: /petmarket/requests");
//     }

//     if($result == 1){
//         header("Location: /petmarket/requests?success=true");
//     } else {
//         header("Location: /petmarket/requests?success=false");
//     }
// }

// // Get all the pending requests for the current user

// // $requestData = $Pet->get_pending_requests($_SESSION['user']['email']);

// // if ($requestData != null) {
// //     for ($i = 0; $i < count($requestData); $i++) {
// //         $temp = $Pet->get_data_by_constraint('listed_pet', 'id', $requestData[$i]['pet_id'], true);
// //         $requestData[$i]['pet_name'] = $temp[0]['name'];
// //         $requestData[$i]['photo_path'] = $temp[0]['photo_path'];

// //     }
// // }
// // else{
// //     $requestData = 0;
// // }



?>


