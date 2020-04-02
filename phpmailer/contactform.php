<?php 
$msg = "";
if (isset($_POST['submit'])) {
	require 'phpmailer/PHPMailerAutoload.php';
	
	function sendemail($to, $from, $fromName, $message) {
		$mail = new PHPMailer();
		$mail->setFrom($from, $fromName);
		$mail->addAddress($to);
		$mail->addMessage($message);
		$mail->Subject = 'Contact Form - Email';
		$mail->Message = $message;
		$mail->1stHTML(isHtml:false);
		
		return $mail->send();
		
	}
	
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	if(sendemail(to:'violettamaj53@gmail.com', $email, $name, $message));
	    $msg = 'Email Sent!';
	else
		$msg = 'Email Failed!';
}

?>
