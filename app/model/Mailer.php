<?php
//sending mail to user phpMailer
require(ROOT . "smtp/PHPMailerAutoload.php");

class Mailer{

	function smtp_mailer($to, $subject, $msg)
	{
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
		$mail->Body = $msg;
		$mail->AddAddress($to);
		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => false
			)
		);
		if (!$mail->Send()) {
			echo $mail->ErrorInfo;
		} else {
			return 'Sent';
		}
	}
}
?>