<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <title>PodsUp/Accessories</title>
</head>
<body>
<?php require '../../DatabasePuller.php'; ?>
<?php include '../../Assets/Navigatie.php';?>

<div class="ProductDiv">
<main class="ProductGradient three">
      <div>
        <h1>
        Accessoires.
</h1>
</div>
</main>
</div>

<div class="Maintext">

<div>
<form action="/Project-3/WinkelPagina/ZoekProductPagina.php" method="post">
     <input class="ZoekProductText" type="text" name="ZoekProductText" placeholder="Zoek hier voor alle onze producten." >
     <input type="submit" value="Zoek">
     </form>
</div>

<h1>Customise met accessoires.</h1>

<br><br>
<h2>Past op alle air up® flessen.</h2>
<table class="FlessenTable">
    <tr>
        <td>
            <h1>
            Customise met accessoires.
            </h1>
        </td>
    </tr>
            <?php for ($i = 0; $i < count($Product_ID) ; $i++) { 
    if ($Product_Soort[$i] == "Accessoires") {
    echo "
    <a class='ProductLinks' href='/Project-3/WinkelPagina/ProductPagina.php?id=$i'>
    <div class='ZoekPaginaResultatenElement'>
    <img src='$Product_Foto[$i]'>
    <div>
        <h1>$Product_Naam[$i]</h1>
        <p>
        $Product_Beschrijving[$i]
        </p>

        <form action='/Project-3/WinkelPagina/WinkelWagen.php' method='post'>
        <input type='hidden' name='aantal' id='AantalInput' value='1'>
        <button type='submit' name='WinkelWagenSubmit' class='PurpleButton' value='$i'>Toevoegen aan WinkelWagen</button>
      </form>

    </div>
    <div>
    <h1>
    $Product_Prijs[$i]
    </h1>
    <h1>
    $Product_Aantal[$i]
    </h1>
    </div>
</div>
</a>
    ";
}
} ?>
</table>

        </div>


        <?php include '../../Assets/Footer.php';?>
</body>
</html>