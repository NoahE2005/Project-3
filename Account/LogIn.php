<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="/Project-3/Stylesheet.css">
  <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
  <link rel="stylesheet" href="/Project-3/Account/AccountStylesheet.css">
  <title>PodsUp/Login</title>
  </head>
<body>
<?php include '../Assets/Navigatie.php';?>
<div class="MaintextAccount">

<br><br><br>

<form action="Load_Account.php" method="post">
<?php
          if (isset($_GET['error'])) {
              // display the error message
              echo '<p class="error-message">Incorrect email or password</p>';
          }
        ?>
  <label for="fname">Username:</label><br>
  <input type="email" id="fname" class="InputCapslock" name="email" placeholder="Firstname.Lastname@email.com" value=""><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="myInput" class="InputCapslock" name="password" placeholder="Password" value="">
  <input type="checkbox" onclick="TogglePassword()">Show Password
  <br><br>
  <input class="AccountSubmit" type="submit" value="Submit">
</form> 
<p id="TextCapsLock">Warning: Caps lock is on!</p>
<br><br>
<a href="/Project-3/Account/SignUp.php" class="create-account">Create account</a>
</div>

<script src="../Account/App.js"></script>
<?php include '../Assets/Footer.php';?>
</body>
</html>