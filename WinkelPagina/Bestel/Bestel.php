<?php
require '../../DatabasePuller.php'; 

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
    for ($i=0; $i < $Winkelwagen_ID; $i++) { 
        $product_ids .= $Wineklwagen_Product_ID[$i];
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
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $stmt->error;
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
    <title>Document</title>
</head>
<body>
<?php include '../../Assets/Navigatie.php';?>
<!-- <main class="ProductGradient three">
      <div>
        <h1>
        Accessoires.
</h1>
</div>
</main> -->
<div class="Maintext">




        </div>
        <?php include '../../Assets/Footer.php';?>
</body>
</html>