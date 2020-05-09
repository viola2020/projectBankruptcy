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
  <h3> You can log in now </h3>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="POST">
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
     

    </div>
  </div>
 </div>
  
</body>
</html>