<?php
require('includes/config.inc.php');
$page_title='Login';
if($)SERVER['REQUEST_METHOD']=='POST'){
  require(MYSQL);
  if((!empty($_POST['username'])){
    $e=mysqli_real_escape_string($dbc,$_POST['username']);
  }else{
    $e=FALSE;
    echo'<p class="error">You forgot to enter your username!</p>';
  }
  if(!empty($_POST['password'])){
    $p=trim($_POST['password']);
  }else{
    $p=FALSE;
    echo'<p class="error">You forgot to enter your password!</p>';
  }
    if($e&&$p){
      $q="SELECT uID, fName, lName, password FROM users WHERE email='$e' AND active IS NULL";
      $r=mysqli_query($dbc,$q) or trigger_error("Query:$q\n<br>MySQL Error:".mysqli_error($dbc));
      if(@mysqli_num_rows($r)==1){
      list($uID, $fName, $lName, $password)=mysqli_fetch_array($r,MYSQLI_NUM);
      mysqli_free_result($r);
      if(password_verify($p,$password)){
      $_SESSION['uID']=$uID;
      $_SESSION['fName']=$fName;
      $_SESSION['lName']=$lName;
      mysqli_close($dbc);
      $url=BASE_URL.'index.php';
      ob_end_clean();
      header("Location: $url");
      exit();
    }else{
      echo'<p class="error">Either the email address and password entered do not match those on
      file or you have not yet activated your account!</p>'
    }else{
      echo'<p class="error">Either the email address and password entered do not match those on
      file or you have not yet activated your account!</p>'
    }
  }else{
    echo'<p class="error">Please try again.</p>'
  }
  mysqli_close($dbc);
    }
    ?>
    <!DOCTYPE html>
    <html lang="en" >
    <head>
      <meta charset="UTF-8">
      <title>Login</title>
     <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <div class="header">
    <h4>
    Violetta Maj
    <br />
    Melanie Murrill
    <br />
    Calvon Bowden
    <h5>
    NC A&T State University
    <br />
    Greensboro, NC
    </h5>
    <h1>PROJECT PREDICTING BANKRUPTCY</h1>
    </div>
    <ul class="nav">
      <li><a class="active"href="login.html#">Log in</a></li>
      <li><a href="contact.html#">Contact</a></li>
      <li><a href="index.html#">Home</a></li>
    </ul>
    <br />
    <br

      <div class="login-wrap">
      <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
          <form class="sign-in-htm" action="" method="POST">
            <div class="group">
              <label for="user" class="label">Username<sup>*</sup></label>
              <input id="logID" name="logID" type="text" class="input">
            </div>
            <div class="group">
              <label for="pass" class="label">Password<sup>*</sup></label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>
            <div class="group">
              <input id="check" type="checkbox" class="check" checked>
              <label for="check"><span class="icon"></span> Keep me Signed in</label>
            </div>
            <div class="group">
              <input type="submit" class="button" value="Sign In">
            </div>
            <div class="hr"></div>
            <div class="foot-lnk">
              <a href="#forgot">Forgot Password?</a>
            </div>
          </form>


          <form class="sign-up-htm" action="signup.php" method="POST">

        <div class="signup-wrap">

            <div class="group">
              <label for="email" class="label">Email<sup>*</sup></label>
              <input id="email" type="text" class="input" data-type="email">
            </div>

            <div class="group">
              <label for="phone" class="label">Phone<sup>*</sup></label>
              <input id="phone" type="phone" class="input" data-type="phone">
            </div>

            <div class="group">
              <label for="street" class="label">Address <br />Street<sup>*</sup></label>
              <input id="street" name="street" class="input" type="text">
            </div>

            <div class="group">
              <label for="city" class="label">City<sup>*</sup></label>
              <input id="city" name="city" class="input" data-type="city">
            </div>

            <div class="group">
              <label for="state" class="label">State<sup>*</sup></label>
              <input id="state" name="state" class="input" data-type="state">
            </div>

            <div class="group">
              <label for="zip" class="label">Zip<sup>*</sup></label>
              <input id="zip" name="zip" class="input" data-type="zip">
            </div>

            <div class="group">
              <label for="user" class="label">Username<sup>*</sup></label>
              <input id="username" name="username" type="text" class="input">
            </div>

            <div class="group">
              <label for="pass" class="label">Password<sup>*</sup></label>
              <input id="password" name="password" type="password" class="input" data-type="password">
            </div>

            <div class="group">
              <label for="pass" class="label">Confirm Password<sup>*</sup></label>
              <input id="pass" type="password" class="input" data-type="password">
            </div>

            <div class="group">
              <input type="submit" class="button" value="Sign Up">
            </div>

            <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Already Member?</a>
            <br />
            <br />
            </div>
            </div>
          </form>
          <?php
          if(isset($_POST['login]))
          {
           $$username = $_POST['username'];
           $password = $_POST['password'];
           $query="select * from userinfotable WHERE username='$username' AND password='$password'";
           $query_run = mysqli_query($con, $query);
           if(mysqli_num_rows($query_run)>0)
          {
              // valid
              $_SESSION['username']= $username;
              header('location:index.html');
           }
           else
           {
               // invalid
               echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
           }
           }
           ?>

        </div>
      </div>
     </div>

    </body>
    </html>
