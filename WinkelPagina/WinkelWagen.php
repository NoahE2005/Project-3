<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "project-3podsup";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(isset($_POST["WinkelWagenSubmit"])) {
        $product_id = $_POST["WinkelWagenSubmit"];
        $product_quantity = $_POST["aantal"];
        
        $sql = "INSERT INTO winkelwagen (Product_ID, Aantal) VALUES (?, ?)";
    
        if($stmt = mysqli_prepare($conn, $sql)) {

            mysqli_stmt_bind_param($stmt, "ii", $product_id, $product_quantity);
    
            mysqli_stmt_execute($stmt);
    
            mysqli_stmt_close($stmt);

            echo "<script>window.location.href = '/Project-3/WinkelPagina/WinkelWagen.php;</script>";
        }
    }

    if (isset($_POST["WinkelWagenDeleteSubmit"])) {
        $winkelwagen_id = $_POST["WinkelWagenDeleteSubmit"];
        $sql = "DELETE FROM winkelwagen WHERE Winkelwagen_ID = ?";
        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "i", $winkelwagen_id);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }
    }

    if (isset($_POST["WinkelWagenClearSubmit"])) {
        $sql = "TRUNCATE TABLE winkelwagen";
        mysqli_query($conn, $sql);
    }



mysqli_close($conn);

require '../DatabasePuller.php';
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
    <?php include '../Assets/Navigatie.php';?>

    <form method="POST" action="">
    <input type="hidden" name="WinkelWagenClearSubmit" value="true">
    <button type="submit">Clear cart</button>
</form>
<?php
if(count($Winkelwagen_ID) > 0) {
    $Subtotaal = 0;
    $winkelwagen_totaal = count($Winkelwagen_ID);
    echo "<h1>Uw winkelwagen($winkelwagen_totaal)</h1>";
    for ($i=0; $i < count($Winkelwagen_ID); $i++) { 
        $index = $Wineklwagen_Product_ID[$i];
        $totaal = floatval($Product_Prijs[$index]) * floatval($Winkelwagen_Aantal[$i]);
        $Subtotaal += $totaal;
        echo "
        <a class='Winkelwagen_A' href='/Project-3/WinkelPagina/ProductPagina.php?id=$Wineklwagen_Product_ID[$i]'>
        <div class='product-card'>
        <img src='$Product_Foto[$index]'>
        <div>
            <h1>$Product_Naam[$index]</h1>
            <h2>$Product_Prijs[$index] per stuk</h2>
            <h2>Aantal: $Winkelwagen_Aantal[$i]</h2>
        </div>

        <h2 class='total'>Totaal: $totaal </h2>

        <form method='POST' action=''>
        <input type='hidden' name='WinkelWagenDeleteSubmit' value='$Winkelwagen_ID[$i]'>
        <button type='submit'>Remove</button>
        </form>

        </div>
        </a>";
    }

    if($totaal > 20) {
        $prijstotaal = $Subtotaal + 2.95;
    }
    else {
        $prijstotaal = $Subtotaal + 2.95 + 20;
    }
    echo "<div>
    <h1>Samenvatting</h1>
    <h2>Subtotaal ($winkelwagen_totaal item)</h2><h2>€ $Subtotaal</h2>
    <br>
    <h2>Levering en behandeling</h2><h2>€ 2,95</h2>
    <br>
    <h2>Belastingen</h2><h2>Alle prijzen zijn inclusief BTW</h2>
    ";
    if($totaal > 20) {
        echo "<br>
        <h2>Verzendings kosten</h2><h2>€ 20,-</h2>
        ";
    }
    echo "
    <br><br><br>

    <h1>Totaal</h1><h1>€ $prijstotaal</h1>
    </div>";
}
else {
    echo "<h1>Winkelwagen is leeg</h1>";
}
        ?>

<style>
    .product-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem;
        margin-bottom: 1rem;
        background-color: #f5f5f5;
        border-radius: 5px;
    }

    .product-card img {
        width: 120px;
        margin-right: 1rem;
    }

    .Winkelwagen_A {
        color: #333;
        text-decoration: none;
    }

    .product-card h1 {
        font-size: 1.2rem;
        margin: 0;
    }

    .product-card h2 {
        font-size: 1rem;
        margin: 0.5rem 0;
    }

    .product-card .total {
        font-weight: bold;
    }
</style>

</div>
<?php include '../Assets/Footer.php';?>
</body>
</html>