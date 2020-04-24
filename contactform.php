<?php
 $name = $_POST['name'];
 $email = $_POST['email'];
 $response = $_POST['response'];
 $message = $_POST['message'];
 print "<p>Thank you, $name, for your message.</p>
 <p>Your message is:<br>
 <br><b>$message</b></p>
 <p> We will respond soon to:
 <br>
 <br>$email</p>";

$sendmail_from='';
$sendemail_to='violettamaj53@gmail.com';
if($_SERVER['REQUEST_METHOD']=='POST') {
  $problem=false;
  if(empty($_POST['name'])) {
    $problem=true;
    print'<p class="text--error">Please enter your name!</p>';
  }
  if(empty($_POST['email']) || (substr_count($_POST['email'],'@')!=1)) {
    $problem=true;
    print'<p class="text--error">Please enter your email address!</p>';
  }
  if(empty($_POST['message'])) {
    $problem=true;
    print'<p class="text--error">Please enter a message!</p>';
  }
  if(!$problem){
    print'<p class="text--success">We received your message!<br>We will respond soon.</p>';
    $body="Thank you,{$_POST['name']}, for your message!'.";
    mail($_POST['email'],'Registration Confirmation',$body,'From:', $sendmail_from, 'To:', $sendemail_to);
    $_POST=[];
  }else{
    print'<p class="text--error">Please try again!</p>';
  }
}

?>
