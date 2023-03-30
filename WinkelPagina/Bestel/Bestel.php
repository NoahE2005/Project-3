<?php
require '../../DatabasePuller.php'; 
include '../../Assets/Navigatie.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project-3podsup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['account_id'])) {
    $account_id = $_SESSION['account_id'];
    $product_ids = "";
    for ($i=0; $i < count($Winkelwagen_ID); $i++) { 
        $product_ids .= $Winkelwagen_Product_ID[$i];
        $product_ids .= ", ";
    }
    $klant_adres = $_POST['Straat'] . " " . $_POST['Huisnummer'] . ", " . $_POST['Postcode'];
    $klant_land = $_POST['Land'];
    $klant_datum = date("Y/m/d");
    
    $klant_bestelnummer = "";
    for ($i = 0; $i < 9; $i++) {
        $klant_bestelnummer .= rand(0, 9);
    }

    // Prepare and execute the SQL statement to insert data into the table
    $stmt = $conn->prepare("INSERT INTO bestellingen (Account_ID, Product_ID, Klant_Adres, Klant_Land, Klant_Datum, Klant_BestelNummer) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $account_id, $product_ids, $klant_adres, $klant_land, $klant_datum, $klant_bestelnummer);
    $stmt->execute();

    // Check if the data was successfully inserted
    if ($stmt->affected_rows > 0) {
        //echo "Data inserted successfully";
        $sql = "TRUNCATE TABLE winkelwagen";
        mysqli_query($conn, $sql);
    } else {
        //echo "Error inserting data: " . $stmt->error;
    }

    // Close the prepared statement and database connection
$stmt->close();
}


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <title>Bestel</title>
</head>
<body>
<main class="ProductGradient three">
      <div>
        <h1>
        
</h1>
</div>
</main>
<div class="Maintext">

<div class="BestelSuccess">
    <img src="https://www.pngkey.com/png/full/445-4453331_checkmark-check-mark-in-a-circle.png"> <!-- Check mark -->
    <div>
    <h1>De Bestelling is geplaats!</h1>
    <h2>In u account scherm kunt u die bestelling zien en bijhouden.</h2>
    </div>
</div>



        </div>
        <?php include '../../Assets/Footer.php';?>
</body>
<style>
.BestelSuccess {
    text-align: center;
  width: 100%;
  margin: 6vw 0vw;
  display: flex;
  align-items: center;
  flex-direction: column;
  background-color: white;
  border-radius: 1vw;
  padding: 6vw 0vw;
  box-shadow: 0px 0px 0.5vw 0px rgba(0,0,0,0.75);
}

.BestelSuccess img {
    width: 20vw;
    height: 20vw;
}

.BestelSuccess div h1 {
    font-size: 3vw;
}

.BestelSuccess div h2 {
    font-size: 2vw;
    font-weight: normal;
}

</style>
</html>