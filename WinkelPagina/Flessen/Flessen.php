<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <title>PodsUp/Flessen</title>
</head>
<body>
<?php require '../../DatabasePuller.php'; ?>
<?php include '../../Assets/Navigatie.php';?>

<div class="ProductDiv">
<main class="ProductGradient one">
      <div>
        <h1>
        Waterflessen.
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

<table>
<tr>
        <td>
            <h1>Stalen flessen voor cool water</h1>
            <p>
            Scoor alles wat je nodig hebt om koud water te drinken.
            </p>
        </td>
    </tr>
</table>
<table class="FlessenTable">
    <tr>
        <?php echo "
    <a class='ProductLinks' href='/Project-3/WinkelPagina/ProductPagina.php?id=0'>
    <div class='ZoekPaginaResultatenElement'>
    <img src='$Product_Foto[0]'>
    <div>
        <h1>$Product_Naam[0]</h1>
        <p>
        $Product_Beschrijving[0]
        </p>

        <form action='/Project-3/WinkelPagina/WinkelWagen.php' method='post'>
        <input type='hidden' name='aantal' id='AantalInput' value='1'>
        <button type='submit' name='WinkelWagenSubmit' class='PurpleButton' value='0'>Toevoegen aan WinkelWagen</button>
      </form>

    </div>
    <div>
    <h1>
    $Product_Prijs[0]
    </h1>
    <h1>
    $Product_Aantal[0]
    </h1>
    </div>
</div>
</a>

            <a class='ProductLinks' href='/Project-3/WinkelPagina/ProductPagina.php?id=1'>
            <div class='ZoekPaginaResultatenElement'>
            <img src='$Product_Foto[1]'>
            <div>
                <h1>$Product_Naam[1]</h1>
                <p>
                $Product_Beschrijving[1]
                </p>

                <form action='/Project-3/WinkelPagina/WinkelWagen.php' method='post'>
                <input type='hidden' name='aantal' id='AantalInput' value='1'>
                <button type='submit' name='WinkelWagenSubmit' class='PurpleButton' value='1'>Toevoegen aan WinkelWagen</button>
              </form>
        
            </div>
            <div>
            <h1>
            $Product_Prijs[1]
            </h1>
            <h1>
            $Product_Aantal[1]
            </h1>
            </div>
        </div>
        </a>
            "; ?>
    </tr>
</table>

<table>
<tr>
        <td>
            <h1>
            Onze originele flessen
            </h1>
        </td>
    </tr>
</table>
<table class="FlessenTable">
    <?php for ($i = 0; $i < count($Product_ID) ; $i++) { 
    if ($i > 1 && $Product_Soort[$i] == "Fles") {
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