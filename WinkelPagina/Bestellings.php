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

<div class="ProductDiv">
<main class="ProductGradient">
      <div>
        <h1>
        Bestel.
</h1>
</div>
</main>
</div>

<div class="BestelPage">
        <div class="BestelDiv1">
                <h1>
                Contactinformatie
                </h1>
                <table>
                        <tr>
                                <td>
                                <input type="email" placeholder="E-mail" required>
                                </td>
                        </tr>

                        <tr>
                                <td>
                                        <h1>
                                        Bezorgadres
                                        </h1>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <select class="select" name="Land" id="Land">
                                  <option value=""></option>
                                  <option value="Australië">Australië</option>
                                  <option value="Oostenrijk">Oostenrijk</option>
                                  <option value="België">België</option>
                                  <option value="Canada">Canada</option>
                                  <option value="Frankrijk">Frankrijk</option>
                                  <option value="Duitsland">Duitsland</option>
                                  <option value="Italië">Italië</option>
                                  <option value="Mexico">Mexico</option>
                                  <option value="Nederland">Nederland</option>
                                  <option value="Zweden">Zweden</option>
                                  <option value="Schweiz">Schweiz</option>
                                  <option value="Verenigd-Koninkrijk">Verenigd Koninkrijk</option>
                                  <option value="Verenigde-Staten-van-Amerika">Verenigde Staten van Amerika</option>
                                  <option value="Anders">Anders</option>
                                </select>   
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <input type="text" placeholder="Voornaam" required>
                                </td>
                                <td>
                                <input type="text" placeholder="Achternaam" required>
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <input type="text" placeholder="Bedrijf (optioneel)">
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <input type="text" placeholder="Straat">
                                </td>
                                <td>
                                <input type="text" placeholder="Huisnummer">
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <input type="text" placeholder="Postcode">
                                </td>
                                <td>
                                <input type="text" placeholder="Stad">
                                </td>
                        </tr>
                        <tr>
                        <input type="submit" placeholder="Verzenden">
                        </tr>
                </table>
        </div>

        <div class="BestelDiv2">
                <div>
                       <?php 
                       $Subtotaal = 0;
                           for ($i=0; $i < count($Winkelwagen_ID); $i++) { 
                                $index = $Wineklwagen_Product_ID[$i];
                                $totaal = floatval($Product_Prijs[$index]) * floatval($Winkelwagen_Aantal[$i]);
                                $Subtotaal += $totaal;
                                echo "
                        
                                <a class='Winkelwagen_A' href='/Project-3/WinkelPagina/ProductPagina.php?id=$Wineklwagen_Product_ID[$i]'>
                                <div class='order-card'>
                                <img src='$Product_Foto[$index]'>
                                <div>
                                    <h1>$Product_Naam[$index]</h1>
                                    <h2>$Product_Prijs[$index] per stuk</h2>
                                </div>
                        
                                </div>
                                </a>
                                ";
                            }
                       ?> 
                </div>
                <div>
                        <table>
                                <tr>
                                        <td>
                                        Subtotaal
                                        </td>
                                        <td>
                                        *prijs*
                                        </td>
                                </tr>
                        </table>
                </div>
        </div>
</div>


        <?php include '../Assets/Footer.php';?>
</body>

<style>
        .order-card {
           display: flex;
           align-items: center;
           justify-content: space-between;
           max-width: 30vw;
           width: 24vw;
           padding: 1rem;
           margin-bottom: 1rem;
           background-color: #f5f5f5;
           border-radius: 5px;
           margin: 1.6vw 8vw;
    } 

    .order-card img {
        width: 120px;
        margin-right: 1rem;
    }

        .BestelPage {
                display: flex;
                flex-direction: row;

        }

        .BestelDiv1 {
                width: 60%;
        }

        .BestelDiv2 {
                background-color: lightgray;
                width: 40%;
        }
</style>
</html>