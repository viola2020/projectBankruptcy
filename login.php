<?php
$uname="viola2020";
$pwd="sara55";
session_start();
if(isset($_SESSION['uname'])){
echo"<br /><br /><br /><center><h1>Welcome ".$_SESSION['uname']."</h1>
<h2>You can now go to the Home page. Use the link below.<br /></center>";
echo"<center><a href='index.html'>Home</a></center><br>";
echo"<center><br><a href='logout.php'><input type=button value=logout name=logout></a></center>";
}
else{
if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
$_SESSION['uname']=$uname;
$_SESSION['password']=$pwd;
echo"<script>location.href='welcome.php</script>";
}
else{
echo"<script>alert('Username or password incorrect!')</script>";
echo"<script>location.href='login.html'</script>";
}
}