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
<?php require '../../DatabasePuller.php'; ?>
<?php include '../../Assets/Navigatie.php';?>

<div class="ProductDiv">
<main class="ProductGradient two">
      <div>
        <h1>
        Pods.
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

<h1>Ontdek onze collecties</h1>
<table class="FlessenTable">
        <?php for ($i = 0; $i < count($Product_ID) ; $i++) { 
    if ($Product_Soort[$i] == "Pods") {
    echo "
    <a class='ProductLinks' href='/Project-3/WinkelPagina/ProductPagina.php?id=$i'>
    <div class='ZoekPaginaResultatenElement'>
    <img src='$Product_Foto[$i]'>
    <div>
        <h1>$Product_Naam[$i]</h1>
        <p>
        $Product_Beschrijving[$i]
        </p>
        "; echo include '../../Assets/ToevoegenWinkelwagenButton.php'; 
        $ID = $Product_ID[$i]; echo"
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