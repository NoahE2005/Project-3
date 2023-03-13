<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
  <link rel="stylesheet" href="/Project-3/Account/AccountStylesheet.css">
  </head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $password = $_POST['password'];
  $confirm_password = $_POST['password2'];
  if ($password !== $confirm_password) {
    echo "Error: Passwords do not match. Please try again.";
    exit();
  }
  // The rest of your code to create the account goes here
}
?>
<?php include '../Assets/Navigatie.php';?>
<div class="MaintextAccount">

<br><br><br>

<form action="Create_Account.php" method="post">
<label for="fname">Username:</label><br>
  <input type="text" id="fname" class="InputCapslock" name="uname" placeholder="Gebruikersnaam" value=""><br><br>
  <label for="fname">Email:</label><br>
  <input type="email" id="fname" class="InputCapslock" name="email" placeholder="Firstname.Lastname@email.com" value=""><br><br>

  <label for="lname">Password:</label><br>
  <input type="password" id="myInput" class="InputCapslock" name="password" placeholder="Password" value="">
  <br>
  <label for="lname">Confirm password:</label><br>
  <input type="password" id="myInput" class="InputCapslock" name="password2" placeholder="Password" value="">
  <input type="checkbox" onclick="TogglePassword()">Show Password
  <br><br>
  <input class="AccountSubmit" type="submit" value="Submit">
  
</form> 
<p id="TextCapsLock">Warning: Caps lock is on!</p>
<br><br>

<a href="/Project-3/Account/LogIn.php" class="create-account">Terug naar login</a>
</div>

<script src="../Account/App.js"></script>
<?php include '../Assets/Footer.php';?>
</body>
</html>