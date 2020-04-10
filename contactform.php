<?php 
$msg = "";
use  PHPMailer\PHPMailer\PHPMailer;
include_once "PHPMailer/PHPMailer.php";
include_once "PHPMailer/Exception.php";
	
if (isset($_POST['submit'])) {
        $subject = $_POST['subject'];
	$email =  $_POST['email'];
	$message = $_POST['message'];
	
	$mail = new PHPMailer();
	$mail->addAddress(address: 'violettamaj53@gmail.com');
	$mail->setFrom($email);
	$mail->Subject = $subject;
	$mail->isHTML(isHtml:true);
	$mail->body = $message;
	
	if (email->send())
		$msg = "Your Message has been sent!";
	else
		$msg = "Please try again!";
		
	}

?>
    <?php if ($msg != "") echo "$msg<br>"; ?>
