<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project-3podsup";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM accounts"); 
    $stmt->execute();

    $result = $stmt->fetchAll();

    //Account array maken
    $Account_All = $result;
    $Account_ID = [];
    $Account_Username = [];
    $Account_Email = [];
    $Account_Password = [];
    $Account_Foto = [];
    $Account_Thema = [];

    foreach($result as $row) { //Database info toevoegen aan alle Arrays
        array_push($Account_ID, $row['ID']);
        array_push($Account_Username, $row['Username']);
        array_push($Account_Email, $row['Email']);
        array_push($Account_Password, $row['Password']);
        array_push($Account_Foto, $row['Foto']);
        array_push($Account_Thema, $row['Thema']);
    }

    // var_dump($Account_ID);
    // echo "<br>";
    // var_dump($Account_Email);
    // echo "<br>";
    // var_dump($Account_Password);
    //     echo "<br>";



} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM producten"); 
    $stmt->execute();

    $result = $stmt->fetchAll();

    //Product array maken
    $Product_All = $result;
    $Product_ID = [];
    $Product_Soort = [];
    $Product_Naam = [];
    $Product_Foto = [];
    $Product_Prijs = [];
    $Product_Aantal = [];
    $Product_Beschrijving = [];

    foreach($result as $row) { //Database info toevoegen aan alle Arrays
        array_push($Product_ID, $row['ID']);
        array_push($Product_Soort, $row['Soort']);
        array_push($Product_Naam, $row['Naam']);
        array_push($Product_Foto, $row['Foto']);
        array_push($Product_Prijs, $row['Prijs']);
        array_push($Product_Aantal, $row['Aantal']);
        array_push($Product_Beschrijving, $row['Beschrijving']);

    }

    // var_dump($Product_ID);
    // echo "<br>";
    // var_dump($Product_Soort);
    // echo "<br>";
    // var_dump($Product_Naam);
    // echo "<br>";
    // var_dump($Product_Foto);
    // echo "<br>";
    // var_dump($Product_Prijs);
    // echo "<br>";
    // var_dump($Product_Aantal);
    // echo "<br>";
    // var_dump($Product_Beschrijving);
    // echo "<br>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM reviews"); 
    $stmt->execute();

    $result = $stmt->fetchAll();

    //Product array maken
    $Reviews_All = $result;
    $Reviews_ID = [];
    $Reviews_Product_ID = [];
    $Reviews_Account_ID = [];
    $Reviews_Naam = [];
    $Reviews_Email = [];
    $Reviews_Sterren = [];
    $Reviews_Datum = [];
    $Reviews_Titel = [];
    $Reviews_Beschrijving = [];

    foreach($result as $row) { //Database info toevoegen aan alle Arrays
        array_push($Reviews_ID, $row['ID']);
        array_push($Reviews_Product_ID, $row['Product_ID']);
        array_push($Reviews_Account_ID, $row['Account_ID']);
        array_push($Reviews_Naam, $row['Naam']);
        array_push($Reviews_Email, $row['Email']);
        array_push($Reviews_Sterren, $row['Sterren']);
        array_push($Reviews_Datum, $row['Datum']);
        array_push($Reviews_Titel, $row['ReviewTitel']);
        array_push($Reviews_Beschrijving, $row['Beschrijving']);

    }

    // var_dump($Reviews_ID);
    // echo "<br>";
    // var_dump($Reviews_Product_ID);
    // echo "<br>";
    // var_dump($Reviews_Naam);
    // echo "<br>";
    // var_dump($Reviews_Email);
    // echo "<br>";
    // var_dump($Reviews_Sterren);
    // echo "<br>";
    // var_dump($Reviews_Datum);
    // echo "<br>";
    // var_dump($Reviews_Beschrijving);
    // echo "<br>";

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


$conn = null;

    ?>
