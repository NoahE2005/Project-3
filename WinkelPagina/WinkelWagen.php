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
        <?php session_start();// controleer of de "add-to-cart" knop is gekliktif
        (isset($_POST["add-to-cart"])){   // maak een array voor het item dat aan de winkelwagen wordt toegevoegd  
        $item_array = array(    'product_id' => $_POST["product_id"],    'product_name' => $_POST["product_name"],    'product_price' => $_POST["product_price"],    'product_quantity' => $_POST["product_quantity"]  );   // controleer of de sessievariabele voor de winkelwagen bestaat, zo niet, maak deze dan aan  if(!isset($_SESSION["shopping_cart"])){    $_SESSION["shopping_cart"] = array();  }   // voeg het item toe aan de winkelwagen  array_push($_SESSION["shopping_cart"], $item_array);}?><!-- HTML-formulier om een item aan de winkelwagen toe te voegen --><form method="post" action="">  <input type="hidden" name="product_id" value="1">  <input type="hidden" name="product_name" value="Voorbeeldproduct">  <input type="hidden" name="product_price" value="10.00">  <input type="number" name="product_quantity" value="1">  <input type="submit" name="add-to-cart" value="Toevoegen aan winkelwagen"></form><!-- PHP-code om de items in de winkelwagen te tonen --><?php// controleer of de sessievariabele voor de winkelwagen bestaat en niet leeg isif(isset($_SESSION["shopping_cart"]) && count($_SESSION["shopping_cart"]) > 0){   // toon de winkelwagen-items  foreach($_SESSION["shopping_cart"] as $item){    echo $item["product_name"]." - ".$item["product_price"]." - ".$item["product_quantity"]."<br>";  } }?>        </div>        <?php include '../Assets/Footer.php';?></body>
        </html>