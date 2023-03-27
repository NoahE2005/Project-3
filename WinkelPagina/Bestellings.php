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
                <table class="BestelTable">
                <form action="Bestel/Bestel.php" method="POST">
                        <tr>
                                <th>
                                        <h1>
                                        Contactinformatie
                                        </h1>
                                </th>
                        </tr>
                        <tr>
                                <td>
                                <input type="email" class="BestelTableFull BestelButton" placeholder="E-mail" required>
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
                                <select class="select BestelTableFull" name="Land" id="Land">
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
                                <td>
                                <input type="text" placeholder="Apertement nummer (optioneel)">
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <input type="text" placeholder="Straat" name="Straat">
                                </td>
                                <td>
                                <input type="text" placeholder="Huisnummer" name="Huisnummer">
                                </td>
                        </tr>
                        <tr>
                                <td>
                                <input type="text" placeholder="Postcode" name="Postcode">
                                </td>
                                <td>
                                <input type="text" placeholder="Stad">
                                </td>
                        </tr>
                        <tr>
                                <td>
                        <input type="submit" value="Doorgaan met verzenden">
                        </form>
                        </td>
                        </tr>
                </table>
        </div>

        <div class="BestelDiv2">
                <div>
                       <?php 
                       $Subtotaal = 0;
                           for ($i=0; $i < count($Winkelwagen_ID); $i++) { 
                                $index = $Winkelwagen_Product_ID[$i];
                                $totaal = floatval($Product_Prijs[$index]) * floatval($Winkelwagen_Aantal[$i]);
                                $Subtotaal += $totaal;
                                echo "
                        
                                <a class='Winkelwagen_A' href='/Project-3/WinkelPagina/ProductPagina.php?id=$Winkelwagen_Product_ID[$i]'>
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
                                <tr class="TableSubtotaalFlex">
                                        <td>
                                        Subtotaal
                                        </td>
                                        <td>
                                        <?php echo $Subtotaal ?>
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
           flex-direction: row;
           max-width: 30vw;
           width: 100%;
           padding: 1rem;
           margin-bottom: 1rem;
           background-color: #f5f5f5;
           border-radius: 0.5vw;
           margin: 1.6vw 8vw;
           border: purple 0.14vw solid;
    } 

    .order-card img {
        width: 120px;
        margin-right: 1rem;
    }

    .Winkelwagen_A {
        text-decoration: none;
        color: black;
        width: 100%;
    }

        .BestelPage {
                display: flex;
                flex-direction: row;

        }

        .BestelDiv1 {
                width: 55%;
                margin-right: 2vw;
        }

        .BestelDiv2 {
                background-color: rgb(234, 234, 234);
                width: 45%;
                display: flex;
                flex-direction: column;
                align-items: center;
        }

        .BestelDiv2 div {
                margin-left: 0.4vw;
        }

        .BestelTable {
                display: flex;
                justify-content: flex-end;
                margin-right: vw;
        }

        .BestelTable tr td input[type="text"], .BestelButton {
                width: 22vw;
                padding: 0.6vw;
                margin: 0.3vw;
                border-radius: 0.4vw;
                border: solid 0.05vw grey;
                transition: 0.5s;
        }
        
        .BestelTable tr td input[type="text"]:hover, .BestelButton:hover {
                border: solid 0.05vw purple;
                transition: 0.5s;
                box-shadow: 0px 0px 0.5vw 0px rgba(168,0,168,1);
        }

        .BestelTable tr td input[type="submit"] {
                padding: 1.3vw;
                background-color: orange;
                color: white;
                border: none;
                border-radius: 0.4vw;
                transition: 0.5s;
        }

        .BestelTable tr td input[type="submit"]:hover {
                cursor: pointer;
                background-color: orangered;
                transition: 0.5s;
        }

        .BestelTableFull {
                /* width: 22vw; */
        }

        .TableSubtotaalFlex {
                display: flex;
                justify-content: space-between;
                flex-direction: row;
        }

        .TableSubtotaalFlex td {
                font-size: 1.9vw;
                margin: 1vw 8vw;
        }
</style>
</html>