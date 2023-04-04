<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <title>PodsUp</title>
</head>
<body>
  <?php require '../Project-3/DatabasePuller.php'; ?>
<?php include '../Project-3/Assets/Navigatie.php';?>

    <main>
      <div class="HeaderPurple">
        <h1>
        Niet je standaard waterfles.
</h1>
</div>
<div class="ModelContainer">
<script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/3.0.0/model-viewer.min.js"></script>

<model-viewer alt="cube" 
src="Assets/models/untitled.glb" 

poster="Assets/models/untitled.glb" 
shadow-intensity="1" 
camera-controls touch-action="pan-y" 
generate-schema></model-viewer>
</div>
</main>
<div class="Maintext">
        <section>
          <div class="ShuffleDiv">
            <h2>
                Ontdek nieuwe producten:
            </h2>
            
            <button class="ShuffleButton PurpleButton" onclick='Shuffle(
              <?php echo json_encode($Product_ID); ?>, 
              <?php echo json_encode($Product_Soort); ?>,
              <?php echo json_encode($Product_Naam); ?>,
              <?php echo json_encode($Product_Foto); ?>,
              <?php echo json_encode($Product_Prijs); ?>,
              <?php echo json_encode($Product_Aantal); ?>)'>
            Shuffle
          </button>
          </div>

            <div class="OntdekProducten">
              <a class="ProductLinks" href="/Project-3/WinkelPagina/ProductPagina.php?id=4">
              <li id="OntdekLi" class="OntdekLiAnimate" name="OntdekLi">
                <div class="OntdekLiImgZoom">
                  <figure>
                <img name="OntdekLiImg" class="OntdekLiImg">
                </figure>
                </div>
                <h1 name="OntdekLiH1" class="OntdekLiH1Text">1</h1>
                <h2 name="OntdekLiPrijs">€ </h2> 
                <!-- <form action="/Project-3/WinkelPagina/WinkelWagen.php" method="post">
                  <input type="hidden" name="aantal" id="AantalInput" value="1">
                <button type="submit" name="WinkelWagenSubmit" id="OntdekSubmit" class="PurpleButton WinkelwagenSubmit ButtonWidth" value="1">Toevoegen aan WinkelWagen</button>
                </form> -->
              </li>
              </a>

              <a class="ProductLinks" href="/Project-3/WinkelPagina/ProductPagina.php?id=3">
              <li id="OntdekLi" class="OntdekLiAnimate" name="OntdekLi">
                <div class="OntdekLiImgZoom">
                  <figure>
                <img name="OntdekLiImg" class="OntdekLiImg">
            </figure>
            </div>
            <h1 name="OntdekLiH1" class="OntdekLiH1Text">2</h1>
                <h2 name="OntdekLiPrijs">€ </h2> 
                <!-- <form action="/Project-3/WinkelPagina/WinkelWagen.php" method="post">
                <input type="hidden" name="aantal" id="AantalInput" value="1">
                <button type="submit" name="WinkelWagenSubmit" id="OntdekSubmit" class="PurpleButton WinkelwagenSubmit ButtonWidth" value="1">Toevoegen aan WinkelWagen</button>
                </form> -->
              </li>
            </a>

            <a class="ProductLinks" href="/Project-3/WinkelPagina/ProductPagina.php?id=2">
              <li id="OntdekLi" class="OntdekLiAnimate" name="OntdekLi">
                <div class="OntdekLiImgZoom">
                  <figure>
                <img name="OntdekLiImg" class="OntdekLiImg">
            </figure>
            </div>
            <h1 name="OntdekLiH1" class="OntdekLiH1Text">3</h1>
                <h2 name="OntdekLiPrijs">€ </h2> 
                <!-- <form action="/Project-3/WinkelPagina/WinkelWagen.php" method="post">
                  <input type="hidden" name="aantal" id="AantalInput" value="1">
                <button type="submit" name="WinkelWagenSubmit" id="OntdekSubmit" class="PurpleButton WinkelwagenSubmit ButtonWidth" value="1">Toevoegen aan WinkelWagen</button>
                </form> -->
              </li>
            </a>

            </div>
        </section>
        <br><br>
    <section class="StappenSection">
            <h2>
                Hoe werkt het?
            </h2>
            <section class="StappenImages">
              <div class="one">
                <h3>
                  Stap 1: Vul de fles
                </h3>
                
              </div>
              <div class="two">
                <h3>
                  Stap 2: Activeer je geur pod
                </h3>

              </div>
              <div class="three">
                <h3>
                  Stap 3: Geniet!
                </h3>

              </div>
            </section>
            <br><br><br>

            <br><br>
            <div class="RetronasaalFlex">
              <div>
              <h2>
                Retronasaal: de wetenschap achter de geur
            </h2>
            <p>
            80% van onze smaak is afgeleid van wat we ruiken.

            <br>

            Veel mensen denken dat smaak volledig tot stand komt door middel van onze tong en smaakpapillen, 
            maar in werkelijkheid draagt de tong slechts gedeeltelijk bij aan onze smaakervaring.

            <br>

            *National Institute on Deafness and Other Communication
            </p>
              </div>
              <img src="/Project-3/Assets/Video_Assets/Gifs/assets_08f6ee9c3cf541f3bf2664eb8b4199b3_6e4532d470b34469a1b8e17b0c315777_compressed.gif">
            </div>

            <section>

            </section>
        </section>

        <br><br>
        <section>
            <h2>Veelgestelde vragen</h2>
            <br>

<button class="collapsible">
  <span class="icon">&#9660;</span>
  Hoe registreerd je brein smaak?
</button>
<div class="content">
  <p>
    Het merendeel van wat we proeven, komt van onze olfactorische receptoren (dat deel van ons lichaam dat een centrale rol speelt in ons gevoel van geur).

    <br><br>

Alles wat we doen wordt mogelijk gemaakt door retronasale geur, op die manier kunnen we smaak aan water 'toevoegen'. Onze flessen zorgen ervoor dat de geur die in onze pods zit, geregistreerd kan worden met elke slok.
</p>
</div>



<button class="collapsible">
  <span class="icon">&#9660;</span>
  Wat zit er precies in de pods?
</button>
<div class="content">
  <p>
  De geur in onze pods wordt uitsluitend verkregen uit natuurlijke ingrediënten. Fruit, kruiden, specerijen. Deze geuren worden op een luchtdoorlatend materiaal geplaatst, of op wat wij graag 'het vlies' noemen.
</p>
</div>


<button class="collapsible">
  <span class="icon">&#9660;</span>
  Waar we de ingrediënten vandaan halen?
</button>
<div class="content">
  <p>
  We kunnen natuurlijk niet al onze geheimen verklappen, maar we kunnen wél vertellen dat al onze geuren van een hoogwaardige geurfabrikant komen, die ze onttrekt aan natuurlijk bronnen. Ons geur-ontwikkelingsteam produceert daar de lekkerste smaken mee , en voilà: een geurpod is geboren.

  <br><br>

We zijn er trouwens heel trots op dat onze vega en vegan vrienden ook kunnen genieten van onze pods.
</p>
</div>



<button class="collapsible">
  <span class="icon">&#9660;</span>
  Hoe sluit je je fles goed af?
</button>
<div class="content">
  <p>
  Onze fles heeft een ventiel aan de bovenkant van het mondstuk, waardoor je kunt blijven drinken zonder te stoppen. Houd je fles tijdens het drinken rechtop om lekken te voorkomen. Het is net alsof je met een rietje uit een glas drinkt. Draai de dop stevig dicht om lekken te voorkomen.
</p>
</div>



<button class="collapsible">
  <span class="icon">&#9660;</span>
  Hoe haal je alles uit je pod?
</button>
<div class="content">
  <p>
  Je hoort luchtbelletjes als je drinkt met een geactiveerde pod. Dit is een teken dat de pod werkt!
<br><br><br>
1. Controleer of je je fles in elkaar hebt gezet op de manier zoals je in deze video ziet.
<br><br>
2. Zorg ervoor dat de pod is geactiveerd (tot aan het randje omhooggetrokken).
<br><br>
3. Zorg ervoor dat het rietje helemaal tot in het mondstuk is geplaatst.
<br><br>
Als de pod na het controleren van deze drie punten nog steeds niet werkt, neem dan de volgende twee stappen:
<br><br>
4. Probeer een andere pod om te checken of het aan de pod ligt of aan iets in de fles.
<br><br>
5. Haal de fles eerst helemaal uit elkaar, en zet 'm daarna weer ín elkaar.
</p>
</div>



<button class="collapsible">
  <span class="icon">&#9660;</span>
  Wat betekenen die bubbels?
</button>
<div class="content">
  <p>
  Met onze techniek is het normaal dat er in elke slok die je neemt, kleine luchtbelletjes zitten. Deze luchtbelletjes nemen de smaak mee van de pod en stellen je brein in staat de geur als smaak te ervaren, allemaal zonder dat er iets aan je water wordt toegevoegd!
<br><br>
Hierbij een handige video die je tot in detail laat zien hoe het werkt.
</p>
</div>

<br>
<a href="../Project-3/Support/VeelgesteldeVragen.php">Alle Veelgestelde vragen ></a>


        </section>

        <br><br>
        </div>


        <?php include '../Project-3/Assets/Footer.php';?>
</body>
<script src="/Project-3/App.js"></script>
<script>
  /*De shuffle functie roepen gelijk als the pagina wordt geladen*/
    Shuffle(
              <?php echo json_encode($Product_ID); ?>, 
              <?php echo json_encode($Product_Soort); ?>,
              <?php echo json_encode($Product_Naam); ?>,
              <?php echo json_encode($Product_Foto); ?>,
              <?php echo json_encode($Product_Prijs); ?>,
              <?php echo json_encode($Product_Aantal); ?>);
</script>
</html>