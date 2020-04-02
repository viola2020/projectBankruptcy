<?php 
$msg = "";
if (isset($_GET['upload'])) {
	require 'phpmailer/PHPMailerAutoload.php';
	
	function sendemail($to, $upload) {
		$mail = new PHPMailer();
		$mail->setFrom($from);
		$mail->addAddress($to);
		$mail->addUpload($upload);
		$mail->Subject = 'Upload Files';
		$mail->1stHTML(isHtml:false);
		
		return $mail->send();
		
	}
	
	$file = "upload/" . basename($_FILES['upload']['name']);
	if(move_uploaded_file($_FILES['upload']['tmp_name'], $file)) {
	    $msg = 'File Uploaded!';
	} else
		$msg = 'Upload Failed!';
}

?>
