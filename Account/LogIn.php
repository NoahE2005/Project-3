<!DOCTYPE html>
<html>
<body>
<script src="../Account/App.js"></script>
<?php include '/Xampp/htdocs/Project-3/Assets/Navigatie.php';?>
<div class="Maintext">

<br><br><br>

<form action="action_page.php" method="post">
  <label for="fname">Username:</label><br>
  <input type="email" id="fname" name="uname" placeholder="Firstname.Lastname@email.com" value=""><br>
  <label for="lname">Password:</label><br>
  <input type="password" id="myInput" name="password" placeholder="Password" value="Doe">
  <input type="checkbox" onclick="TogglePassword()">Show Password
  <br><br>
  <input type="submit" value="Submit">
</form> 
<h2 id="text">Warning: Caps lock is on!</h2>
<br><br>

</div>


<?php include '/Xampp/htdocs/Project-3/Assets/Footer.php';?>
</body>
</html>