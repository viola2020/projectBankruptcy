<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Your Feedback</title>
</head>
 <style>
  p {
   align:center;
   text-color:red;
  }
 </style>
<body>
 <?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];
 print "<p>Thank you, <b>$name</b>, for your message.</p>
 <p>Your message is:<br>
 <br><b>$message</b></p>
 <p> We will respond soon to:
 <br>
 <br>$email</p>";
 ?>
</body>
</html>
