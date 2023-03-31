<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <title>PodsUp/Contact</title>
</head>
<body>
<?php include '../Assets/Navigatie.php';?>

<main class="ProductGradient">
      <div>
        <h1>
        Contact.
</h1>
</div>
</main>

<div class="Maintext">

<div class="ContactForm">
<form action="ContactInfoSubmit.php" method="post">
    <h1>Contact formulier</h1>
    <p>
        Voornaam Achternaam
    </p>
    <input name="Naam" type="text" placeholder="John doe"><br><br>

    <p>
        E-mailadres*
    </p>
    <input name="Email" type="email" placeholder="Jouw email" required><br><br>

    <p>
        Land
    </p>
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
  </select><br><br>

  <p>
    Verkooppunt
  </p>
  <select class="select" name="Verkooppunt" id="Verkooppunt">
    <option value=""></option>
    <option value="Pods-Up.com">Pods-Up.com</option>
    <option value="Amazon">Amazon</option>
    <option value="Anders">Anders</option>
  </select><br><br>

  <p>
    Hoe kunnen wij je helpen
  </p>
  <select class="select" name="Helpen" id="Helpen">
    <option value=""></option>
    <option value="Waar-is-mijn-bestelling?">Waar is mijn bestelling?</option>
    <option value="Aanpassen-of-annuleren-van-mijn-bestelling">Aanpassen of annuleren van mijn bestelling</option>
    <option value="Product beschikbaarheid">Product-beschikbaarheid</option>
    <option value="Ik-heb-geen-smaak">Ik heb geen smaak</option>
    <option value="Mijn-fles-lekt">Mijn fles lekt</option>
    <option value="Verkeerde-items-ontvangen">Verkeerde items ontvangen</option>
    <option value="Start-een-retourzending">Start een retourzending</option>
    <option value="B2B-vragen">B2B vragen</option>
    <option value="Anders">Anders</option>
  </select><br><br>

  <p>
    Bestellingsnummer
  </p>
    <input name="Bestellingsnummer" type="text" placeholder="#NL-123456"><br><br>

    <p>
        Onderwerp*
    </p>
    <input name="Onderwerp" type="text" required><br><br>

    <p>
        Beschrijving*
    </p>
    <textarea name="Beschrijving" required></textarea><br><br>

    <p>
        Screenshots (optioneel)
    </p>
    <input type="file" id="img" name="img" accept="image/*" multiple><br><br>

    <input type="submit"> 
</form>
</div>

        </div>


        <?php include '../Assets/Footer.php';?>
</body>
</html>