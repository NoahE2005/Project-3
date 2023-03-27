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
<?php require '../DatabasePuller.php'; ?>
<?php include '../Assets/Navigatie.php';?>
<?php
$PriceSlider = isset($_POST["PriceSlider"]) ? floatval($_POST["PriceSlider"]) : 50;
$ZoekProductText = isset($_POST["ZoekProductText"]) ? $_POST["ZoekProductText"] : "";
$Fles = isset($_POST["Fles"]) ? $_POST["Fles"] : "";
$Pods = isset($_POST["Pods"]) ? $_POST["Pods"] : "";
$Accessoires = isset($_POST["Accessoires"]) ? $_POST["Accessoires"] : "";

if($Fles == "Fles") {
    $CheckBoxFles = "checked";
}
    else {
        $CheckBoxFles = "";
    }
if($Pods == "Pods") {
    $CheckBoxPods = "checked";
}
    else {
        $CheckBoxPods = "";
    }
if($Accessoires == "Accessoires") {
    $CheckBoxAccessoires = "checked";
}
    else {
        $CheckBoxAccessoires = "";
    }

function Valid($ID) {
    global $Product_Prijs;
    global $Product_Soort;
    global $Product_Naam;
    global $PriceSlider;
    global $ZoekProductText;
    global $CheckBoxFles;
    global $CheckBoxPods;
    global $CheckBoxAccessoires;
    global $Fles;
    global $Pods;
    global $Accessoires;

    if($Product_Prijs[$ID] >= $PriceSlider) {
        return false;
}
        if ($Product_Soort[$ID] != $Fles && $CheckBoxFles == "checked") {
            return false;
        }

        if ($Product_Soort[$ID] != $Pods && $CheckBoxPods == "checked") {
            return false;
        }

        if ($Product_Soort[$ID] != $Accessoires && $CheckBoxAccessoires == "checked") {
            return false;
        }
        if(str_contains(strtolower($Product_Naam[$ID]), strtolower($ZoekProductText)) || str_contains(strtolower($Product_Soort[$ID]), strtolower($ZoekProductText))) {
            return true;
        }
        elseif($ZoekProductText != "") {
            return false;
        }

    if($CheckBoxFles != "checked" || $CheckBoxPods != "checked" || $CheckBoxAccessoires != "checked") {
        return true;
    }

    return false;
    }
?>



<main class="ProductGradient">
      <div>
        <h1>
        Zoeken.
</h1>
</div>
</main>
<div>

<div>
    <div class="ZoekProductTextFlex">
        <form action="/Project-3/WinkelPagina/ZoekProductPagina.php" method="post">
<input type="text" class="ZoekProductText" name="ZoekProductText" placeholder="Voer hier in de naam of soort van het product die u wilt." value="<?php echo $ZoekProductText ?>">
</div>
<section>

</section>

<section class="ZoekProductSection">
<div class="ZoekProductFilters">
    <h1>Filters</h1>
    <label>Max prijs
<input type="range" min="1" max="100" name="PriceSlider" value="<?php echo $PriceSlider ?>" class="slider" id="myRange">
<h2 id="SliderText"></h2>
</label>

<br><br>

    <input type="checkbox" id="Fles" value="Fles" name="Fles" <?php echo $CheckBoxFles ?>><label>Fles</label>
    <br>
    <input type="checkbox" id="Pods" value="Pods" name="Pods" <?php echo $CheckBoxPods ?>><label>Pods</label>
    <br>
    <input type="checkbox" id="Accessoires" value="Accessoires" name="Accessoires" <?php echo $CheckBoxAccessoires ?>><label>Accessoires</label>
    <br><br>
    <input type="submit" class="OrangeButton" value="Submit">
    </form>
</div>
<div class="ZoekPaginaResultaten">
    <h1>Resultaten: <?php echo GetResultaten() ?></h1>

    <?php for ($i = 0; $i < count($Product_ID) ; $i++) { 
    if (Valid($i)) {
    $Valid_IDs = $Product_ID[$i];
    echo "
    <a class='ProductLinks' href='/Project-3/WinkelPagina/ProductPagina.php?id=$i'>
    <div class='ZoekPaginaResultatenElement'>
    <img src='$Product_Foto[$i]'>
    <div>
        <h1>$Product_Naam[$i]</h1>
        <p>
        $Product_Beschrijving[$i]
        </p>
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
} 
function GetResultaten() {
    global $Valid_IDs;
    return $Valid_IDs;
}
?>

</div>

</div>


</section>
        </div>


        <?php include '../Assets/Footer.php';?>
</body>
<script src="/Project-3/WinkelPagina/ZoekProductPaginaApp.js"></script>
<script>SliderTextChange()</script>
</html>