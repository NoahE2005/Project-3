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

    <main class="ProductGradient">
      <div>
        <h1>
        Winkelwagen.
</h1>
</div>
</main>

<?php
if(count($Winkelwagen_ID) > 0) {
    $Subtotaal = 0;
    $winkelwagen_totaal = count($Winkelwagen_ID);
    echo "
    <div class='WinkelwagenDiv'>
    ";

    echo"<div>
    <div class='winkelwagenHeader'>
    <h1 class='winkelwagenTitel'>Uw winkelwagen($winkelwagen_totaal)</h1>

    <form method='POST' action=''>
    <input type='hidden' name='WinkelWagenClearSubmit' value='true'>
    <button type='submit' class='PurpleButton'>Clear cart</button>
</form>
</div>
";
    for ($i=0; $i < count($Winkelwagen_ID); $i++) { 
        $index = $Winkelwagen_Product_ID[$i];
        $totaal = floatval($Product_Prijs[$index]) * floatval($Winkelwagen_Aantal[$i]);
        $Subtotaal += $totaal;
        echo "

        <a class='Winkelwagen_A' href='/Project-3/WinkelPagina/ProductPagina.php?id=$Winkelwagen_Product_ID[$i]'>
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
        <button type='submit' class='PurpleButton'>Verwijder</button>
        </form>

        </div>
        </a>
        ";
    }
    echo"</div>";

    if($totaal > 20) {
        $prijstotaal = $Subtotaal + 2.95;
    }
    else {
        $prijstotaal = $Subtotaal + 2.95 + 20;
    }
    echo "
    <table class='WinkelwagenTable'>
    <div>
    <th>
    <h1>Samenvatting</h1>
    </th>

    <tr>
    <td>
    <h2>Subtotaal ($winkelwagen_totaal item)</h2>
    </td>
    <td>
    <h2>€ $Subtotaal</h2>
    </td>
    </tr>

    <br>

    <tr>
    <td>
    <h2>Levering en behandeling</h2>
    </td>
    <td>
    <h2>€ 2,95</h2>
    </td>
    </tr>

    <br>

    <tr>
    <td>
    <h2>Belastingen </h2>
    </td>
    <td>
    <h2>Alle prijzen zijn inclusief BTW</h2>
    </td>
    </tr>
    ";
    if($totaal < 20) {
        echo "<br>
        <tr>
        <td>
        <h2>Verzendings kosten</h2>
        </td>
        <td>
        <h2>€ 20,-</h2>
        </td>
        </tr>
        ";
    }
    echo "
    <br><br><br>

    <tr>
    <td>
    <h3>Totaal</h3>
    </td>
    <td>
    <h3>€ $prijstotaal</h3>
    </td>
    </tr>

    <tr>
    <td>
    <form method='POST' action='Bestellings.php'>
    <button type='submit' class='PurpleButton'>Bestel</button>
    </form>
    </td>
    </tr>
    </div>
    </table>";
}
else {
    echo "<h1 class='LeegH1'>Uw winkelwagen is leeg</h1>";
}
echo"</div>";
        ?>


<div>
    <h1 class="populairH1">
    Deze zijn nu SUPER populair:
    </h1>
    <br>
    <?php 
    $random_id1 = rand(0, count($Product_ID));
    $random_id2 = rand(0, count($Product_ID));
    $random_id3 = rand(0, count($Product_ID));
    ?>
    <div class="OntdekProducten">
              <a class="ProductLinks" href="/Project-3/WinkelPagina/ProductPagina.php?id=4">
              <li id="OntdekLi" class="OntdekLiAnimate" name="OntdekLi">
                <div class="OntdekLiImgZoom">
                  <figure>
                <img name="OntdekLiImg" class="OntdekLiImg" src="<?php echo $Product_Foto[$random_id1] ?>">
                </figure>
                </div>
                <h1 name="OntdekLiH1"><?php echo $Product_Naam[$random_id1] ?></h1>
                <h2 name="OntdekLiPrijs">€ <?php echo $Product_Prijs[$random_id1] ?></h2> 
                <form action="/Project-3/WinkelPagina/WinkelWagen.php" method="post">
                  <input type="hidden" name="aantal" id="AantalInput" value="<?php echo $random_id1 ?>">
                <button type="submit" name="WinkelWagenSubmit" class="PurpleButton WinkelwagenSubmit ButtonWidth" value="<?php echo $random_id1 ?>">Toevoegen aan WinkelWagen</button>
                </form>
              </li>
              </a>

              <a class="ProductLinks" href="/Project-3/WinkelPagina/ProductPagina.php?id=4">
              <li id="OntdekLi" class="OntdekLiAnimate" name="OntdekLi">
                <div class="OntdekLiImgZoom">
                  <figure>
                <img name="OntdekLiImg" class="OntdekLiImg" src="<?php echo $Product_Foto[$random_id2] ?>">
                </figure>
                </div>
                <h1 name="OntdekLiH1"><?php echo $Product_Naam[$random_id2] ?></h1>
                <h2 name="OntdekLiPrijs">€ <?php echo $Product_Prijs[$random_id2] ?></h2> 
                <form action="/Project-3/WinkelPagina/WinkelWagen.php" method="post">
                  <input type="hidden" name="aantal" id="AantalInput" value="<?php echo $random_id2 ?>">
                <button type="submit" name="WinkelWagenSubmit" class="PurpleButton WinkelwagenSubmit ButtonWidth" value="<?php echo $random_id2 ?>">Toevoegen aan WinkelWagen</button>
                </form>
              </li>
              </a>

              <a class="ProductLinks" href="/Project-3/WinkelPagina/ProductPagina.php?id=4">
              <li id="OntdekLi" class="OntdekLiAnimate" name="OntdekLi">
                <div class="OntdekLiImgZoom">
                  <figure>
                <img name="OntdekLiImg" class="OntdekLiImg" src="<?php echo $Product_Foto[$random_id3] ?>">
                </figure>
                </div>
                <h1 name="OntdekLiH1"><?php echo $Product_Naam[$random_id3] ?></h1>
                <h2 name="OntdekLiPrijs">€ <?php echo $Product_Prijs[$random_id3] ?></h2> 
                <form action="/Project-3/WinkelPagina/WinkelWagen.php" method="post">
                  <input type="hidden" name="aantal" id="AantalInput" value="<?php echo $random_id3 ?>">
                <button type="submit" name="WinkelWagenSubmit" class="PurpleButton WinkelwagenSubmit ButtonWidth" value="<?php echo $random_id3 ?>">Toevoegen aan WinkelWagen</button>
                </form>
              </li>
              </a>
</div>

              <br>
              <br>
              <br>
              <br>
</div>

<style>
    .product-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 70vw;
        width: 54vw;
        padding: 1rem;
        margin-bottom: 1rem;
        border-radius: 0.5vw;
        margin: 1.6vw 8vw;
        border: purple 0.12vw solid;
    } 

    .winkelwagenHeader {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        margin: 0 8vw;
    }

    .product-card img {
        width: 120px;
        margin-right: 1rem;
    }

    .Winkelwagen_A {
        color: #333;
        text-decoration: none;
    }

    .winkelwagenTitel {
        font-size: 3vw;
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

    .WinkelwagenTable {
        background-color: rgb(234, 234, 234);
        padding: 2vw;
        display: flex;
        max-width: 25vw;
    }

    .WinkelwagenTable h1 {
        font-size: 2vw;
    }

    .WinkelwagenTable h3 {
        font-size: 1.5vw;
    }

    .WinkelwagenTable tr {
        display: flex;
        justify-content: space-between;
    }

    .WinkelwagenDiv {
        display: flex;
        flex-direction: row;
        flex-grow: 1;
        padding: 3vw;
    }

    .populairH1 {
        margin-top: 8vw;
        margin-left: 8vw;
        font-size: 2vw;
    }

    .LeegH1 {
        font-size: 3vw;
        text-align: center;
        margin-top: 8vw;
    }

</style>

</div>
<?php include '../Assets/Footer.php';?>
</body>
</html>