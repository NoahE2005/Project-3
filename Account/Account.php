<?php
session_start();
if (isset($_SESSION['account_id'])) {
  $CurrentAccount_ID = (int)$_SESSION['account_id'] ;
} else {
  // Redirect to the login page if the account ID is not set
  header('Location: /Project-3/Account/Login.php');
  exit;
}
  ?>

<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <link rel="stylesheet" href="/Project-3/Account/AccountStylesheet.css">
    <title>PodsUp/Account</title>
  </head>

  <?php
function GetPic() {
  global $Account_Foto_Type;
  global $CurrentAccount_ID;
  global $Account_Foto;
  global $Account_Username;

  $username = $Account_Username[$CurrentAccount_ID];

  // Check if the file for the account exists
  $fileName = "AccountImage-" . $username . "." . $Account_Foto_Type[$CurrentAccount_ID];
  $filePath = "AccountSettings/AccountImage/" . $fileName;
  if (file_exists($filePath)) {
    // Return the image data
    return $filePath;
  } else {
    // Return the default profile picture
    return "/Project-3/Assets/Video_Assets/Image/AccountDefaultProfilePic.png";
  }
}


?>
  <body>
  <?php require '../DatabasePuller.php'; ?>
    <?php include '../Assets/Navigatie.php';?>

    <div>
      <div class="AccountOverzicht">
        <div class="tab">
          <img src="<?php echo GetPic() ?>" alt="Account foto">
          <button class="tablinks active" onclick="openCity(event, 'Account')">Account</button>
          <button class="tablinks" onclick="openCity(event, 'Overzicht')">Overzicht</button>
          <button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>
          <button class="tablinks" onclick="openCity(event, 'Settings')">Settings</button>

          <?php
          if($Account_ID[$CurrentAccount_ID] == 1) {
            // echo "<button class='tablinks' onclick='openCity(event, 'AdminTools') '>AdminTools</button>";
            include '/Xampp/htdocs/Project-3/Assets/AdminTools.php';
          }
          ?>
          
          <button class="tablinks" onclick="location.href='/Project-3/Account/LogOut.php'">Uitloggen</button>
        </div>

        <div id="Account" class="tabcontent">
          <h1>Welkom terug <?php echo $Account_Username[$CurrentAccount_ID] ?>!</h1>
          <br>

          <h3>Laastse bestellingen</h3>
          <?php 
              $validcounter = 0;
          for ($i=0; $i < count($Bestelling_ID); $i++) { 
            if($CurrentAccount_ID == $Bestelling_Account_ID[$i] &&  $validcounter <= 3) {
              $ProductIDs = explode(", ", $Bestelling_Product_ID[$i]);
              $validcounter++;
              echo "<div class='BestellingCard'>
              <h1>
              Bestelling op $Bestelling_Klant_Datum[$i]
              </h1>
              <div class='BestellingCardFlex'>
              ";
              foreach ($ProductIDs as $id) {
                if (isset($Product_ID[$id])) {
                    echo " 
                    <div class='Winkelwagen_Div'>
                        <a class='Winkelwagen_A' href='/Project-3/WinkelPagina/ProductPagina.php?id=$id'>
                        <div class='order-card'>
                        <img src='$Product_Foto[$id]'>
                        <div>
                            <h1>$Product_Naam[$id]</h1>
                            <h2>$Product_Prijs[$id] per stuk</h2>
                        </div>
            
                        </div>
                        </a>
                        </div>

                        <br>
                        <br>
                    ";
                }
            }
              echo "
              </div>
              </div>";
            }
          }
          ?>
        </div>

        <div id="Overzicht" class="tabcontent">
          <h1>Overzicht</h1>

          <h3>All u bestellingen</h3>
          <?php 
          echo "<div class='BestellingCard'>";
          echo "<div class='BestellingCardFlex'>";
          for ($i=0; $i < count($Bestelling_ID); $i++) { 
            if($CurrentAccount_ID == $Bestelling_Account_ID[$i]) {
              $ProductIDs = explode(", ", $Bestelling_Product_ID[$i]);
              echo "<div class=''>
              <h1>
              Bestelling op $Bestelling_Klant_Datum[$i]
              </h1>
              ";
              foreach ($ProductIDs as $id) {
                if (isset($Product_ID[$id])) {
                    echo " 
                    <div class='Winkelwagen_Div'>
                        <a class='Winkelwagen_A' href='/Project-3/WinkelPagina/ProductPagina.php?id=$id]'>
                        <div class='order-card'>
                        <img src='$Product_Foto[$id]'>
                        <div>
                            <h1>$Product_Naam[$id]</h1>
                            <h2>$Product_Prijs[$id] per stuk</h2>
                        </div>
            
                        </div>
                        </a>
                        </div>
                    ";
                }
            }
            echo "</div>"; 
            echo "</div>"; 
          }
        }
          ?>
        </div>

        <div id="Reviews" class="tabcontent">
          <h1>Reviews</h1>
          <div>
            <h2>Laaste reviews:</h2>
    <div class="ReviewTabelFlex">
    <?php
    for ($i = 0 ; $i < count($Reviews_ID); $i++) { 
        if($Reviews_Account_ID[$i] == $CurrentAccount_ID) {
          $Product = $Product_ID[$i];
            echo 
            "
            <div class='ReviewTabelElementContainer'>
            <div class='ReviewTabelElement'>
            <h1>$Reviews_Naam[$i]</h1>
            Deze review is gemaakt op $Reviews_Datum[$i]<br>
            Op dit product: <strong>$Product_Naam[$Product]</strong>
            <br>
        </div>
        <div class='ReviewTabelElement'>
        <br><h3>$Reviews_Sterren[$i] Sterren</h3>
        <h1>$Reviews_Titel[$i]</h1>
        <p>
        $Reviews_Beschrijving[$i]
        </p>
</div>
</div>
        <br>
            ";
        }
    }
    ?>
    </div>
    </div>
        </div>

        <div id="Settings" class="tabcontent">
          <h1>Settings</h1>
          <div>
            <h2>Foto veranderen</h2>
          <form action="AccountSettings/Foto_Insert.php" method="post" enctype="multipart/form-data">
  <label for="file">Choose a file:</label>
  <input type="file" name="file" id="file" accept="image/*"><br>
  <input type="submit" value="Upload" name="submit">
  <br><br>
</form>
<form action="AccountSettings/Foto_Delete.php" method="post">
  <input type="submit" value="Reset to default">
</form>
          </div>
        </div>
        
        <?php
          if($Account_ID[$CurrentAccount_ID] == 1) {
            echo "
            <div id='AdminTools' class='tabcontent'>
            <h1>AdminTools</h1>
            <div>


<button class='collapsible'>
<span class='icon'>&#9660;</span>
Account
</button>
 <div class='content'>
  <p>
  "
  ?>
<table class="TableAdmin">
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Email</th>
    <th>Password</th>
    <th>Foto</th>
    <th>Foto Type</th>
  </tr>
  <?php for ($i = 0; $i < count($Account_ID); $i++) { ?>
    <tr>
      <td><?php echo $Account_ID[$i]; ?></td>
      <td><?php echo $Account_Username[$i]; ?></td>
      <td><?php echo $Account_Email[$i]; ?></td>
      <td><?php echo $Account_Password[$i]; ?></td>
      <td><?php echo $Account_Foto[$i]; ?></td>
      <td><?php echo $Account_Foto_Type[$i]; ?></td>
    </tr>
  <?php } ?>
</table>
<?php
echo "
  </p>
 </div>



<button class='collapsible'>
<span class='icon'>&#9660;</span>
Producten
</button>
<div class='content'>
<p>
";
$headers = array_unique(array_keys($Product_All[0]));

?>
<table class="TableAdmin">
  <tr>
    <th>ID</th>
    <th>Soort</th>
    <th>Naam</th>
    <th>Foto</th>
    <th>Prijs</th>
    <th>Aantal</th>
    <th>Beschrijving</th>
  </tr>
  <?php for ($i = 0; $i < count($Product_ID); $i++) { ?>
    <tr>
      <td><?php echo $Product_ID[$i]; ?></td>
      <td><?php echo $Product_Soort[$i]; ?></td>
      <td><?php echo $Product_Naam[$i]; ?></td>
      <td><?php echo $Product_Foto[$i]; ?></td>
      <td><?php echo $Product_Prijs[$i]; ?></td>
      <td><?php echo $Product_Aantal[$i]; ?></td>
      <td><?php echo $Product_Beschrijving[$i]; ?></td>
    </tr>
  <?php } ?>
</table>

<?php
echo
"
</p>
</div>


<button class='collapsible'>
<span class='icon'>&#9660;</span>
Reviews
</button>
<div class='content'>
<p>
";
?>

<table>
  <tr>
    <th>ID</th>
    <th>Product ID</th>
    <th>Account ID</th>
    <th>Naam</th>
    <th>Email</th>
    <th>Sterren</th>
    <th>Datum</th>
    <th>Titel</th>
    <th>Beschrijving</th>
  </tr>
  <?php for ($i = 0; $i < count($Reviews_ID); $i++) { ?>
    <tr>
      <td><?php echo $Reviews_ID[$i]; ?></td>
      <td><?php echo $Reviews_Product_ID[$i]; ?></td>
      <td><?php echo $Reviews_Account_ID[$i]; ?></td>
      <td><?php echo $Reviews_Naam[$i]; ?></td>
      <td><?php echo $Reviews_Email[$i]; ?></td>
      <td><?php echo $Reviews_Sterren[$i]; ?></td>
      <td><?php echo $Reviews_Datum[$i]; ?></td>
      <td><?php echo $Reviews_Titel[$i]; ?></td>
      <td><?php echo $Reviews_Beschrijving[$i]; ?></td>
    </tr>
  <?php } ?>
</table>

<?php
echo "
</p>
</div>

            </div>
          </div>

          <script src='../App.js'></script>
          <style>
          .TableAdmin tr td {
            max-width: 8vw;
            inline-size: 8vw;
            overflow-wrap: break-word;
          }
          </style>
            ";
          }
          ?>
      </div>
    </div>

    <script src="../Account/App.js"></script>
    <?php include '../Assets/Footer.php';?>


</body>
<script>
    function openCity(evt, Name) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
    tablinks[i].className = tablinks[i].className.replace(" active2", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(Name).style.display = "block"
  document.getElementById(Name).className += " active2";
  evt.currentTarget.className += " active";
}
<?php 
if(isset($_GET['page']) && $_GET['page'] != "") {
  echo "openCity(event, '". $_GET['page'] ."');";
}
else {
  echo "openCity(event, 'Account');";
}
?>

</script>
<style>
.ReviewTabelFlex {
  display: flex;
  flex-direction: column-reverse;
}

.ReviewTabelElementContainer {
  border: solid 0.1vw black;
  border-radius: 1vw;
  padding: 2vw;
  min-width: 80%;
  width: 30vw;
  float: left;
  display: flex;
  flex-direction: row;
}
      
.ReviewTabelElement {
  background-color: #fcfcfc;
  display: flex;
  flex-direction: column;
  margin: 0vw 2vw;
}

.ReviewTabelElement div {
  display: flex;
  flex-direction: column;
  
}

.ReviewTabelElement div, .ReviewTabelElement div p {
  padding: 1vw;
}

.ReviewTabelElement h1 {
  font-size: 1.5vw;
}

table, tr, td {
      border: 1px solid black;
    }

    tr, td {
      min-height: 2vw;
      height: 2vw;
      padding: 0;
      margin: 0;
    }

    td {
      padding: 1vw;
    }

    .BestellingCard {
      max-width: 60vw;
      border: 0.1vw solid black;
      box-shadow: 0px 0px 0.2vw 0px rgba(0,0,0,0.75);
      padding: 1vw;
      margin: 1vw;
      border-radius: 1vw;
    }

    .BestellingCardFlex {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
    }

    .BestellingCardFlex div div h1 {
      font-size: 1.5vw;
    }

    .order-card {
           /* display: flex;
           align-items: center;
           justify-content: space-between;
           flex-direction: row; */
           max-width: 15vw;
           width: 15vw;
           height: 15vw;
           max-height: 15vw;
           padding: 1vw;
           margin-bottom: 1rem;
           background-color: #f5f5f5;
           border-radius: 0.5vw;
           margin: 1.6vw 1vw;
           border: purple 0.14vw solid;
    } 

    .order-card img {
        width: 10vw;
        margin-right: 1rem;
    }

    .Winkelwagen_A {
        text-decoration: none;
        color: black;
        width: 100%;
    }

    .Winkelwagen_Div {
      margin-bottom: 1vw;
    }
    </style>
</html>