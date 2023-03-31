<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Project-3/Stylesheet.css">
    <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PodsUp/VGV</title>
</head>
<body>
<?php include '../Assets/Navigatie.php';?>

<section class="VGVpurple">
    <div>
    <h1>
    Hallo! Hoe kunnen wij je helpen?
    </h1>
    <div class="VGVSearchBar">
    <button onclick="Search()"><i class="fa fa-search"></i></button>
    <input type="text" id="SearchText" placeholder="Voer hier u zoek term in">
    </div>
    </div>
</section>

<div class="Maintext">

<section>
    <h1 class="VeelgesteldeVragenH1">Kies u onderwerp</h1>
    <table class="VeelgesteldeVragenTable">
        <tr>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/De-eerste-Pods-up-fles.php'">
                    <a>
                        <img src="https://i.pinimg.com/originals/05/3d/be/053dbee78855ca9ad19297a20291626d.png">
                        <h2>De eerste Pods up fles</h2>
                    </a>
                </div>
            </td>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/Algemeen.php'">
                    <a>
                        <img src="https://em-content.zobj.net/thumbs/120/microsoft/319/bubbles_1fae7.png">
                        <h2>Algemeen</h2>
                    </a>
                </div>
            </td>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/De-Fles-en-de-Pods.php'">
                    <a>
                        <img src="https://i.pinimg.com/originals/03/d7/89/03d789b3c5a0c122f0dfb9a9d58d9778.png">
                        <h2>De Fles en de Pods</h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/Duurzaamheid.php'">
                    <a>
                        <img src="https://png.pngtree.com/png-clipart/20221230/original/pngtree-green-leaf-png-image_8826419.png">
                        <h2>Duurzaamheid</h2>
                    </a>
                </div>
            </td>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/Defect-en-problemen.php'">
                    <a>
                        <img src="https://cdn.shopify.com/s/files/1/1061/1924/products/Emoji_Icon_-_Thinking_large.png?v=1571606093">
                        <h2>Defect en probelemen</h2>
                    </a>
                </div>
            </td>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/Beschikbaarheid-en-levertijd.php'">
                    <a>
                        <img src="https://cdn.shopify.com/s/files/1/1061/1924/products/Package_Box_Emoji_large.png?v=1571606035">
                        <h2>Beschikbaarheid en levertijd</h2>
                    </a>
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/Betaling.php'">
                    <a>
                        <img src="http://cdn.shopify.com/s/files/1/1061/1924/products/Money_with_Wings_Emoji_grande.png?v=1571606064">
                        <h2>Betaling</h2>
                    </a>
                </div>
            </td>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/Retour-en-annuleringsbeleid.php'">
                    <a>
                        <img src="https://cdn-icons-png.flaticon.com/512/60/60793.png">
                        <h2>Retour -en annuleringsbeleid</h2>
                    </a>
                </div>
            </td>
            <td>
                <div onClick="location.href='/Project-3/Support/SubPaginas/Abonnement.php'">
                    <a>
                        <img src="https://emojis.wiki/emoji-pics/google/credit-card-google.png">
                        <h2>Abonnement</h2>
                    </a>
                </div>
            </td>
        </tr>
    </table>
</section>

<section class="VGVSection">
    <h1>FAQs</h1>
    <table>
        <tr>
            <td>
                <a href="https://support.air-up.com/nl/de-eerste-fles-laten-we-beginnen!-H1XTvsLI5" target="_blank">
                De eerste fles? Laten we beginnen!
                </a>
                <p>
                We laten je zien hoe je de fles het beste kunt gebruiken. 
                Controleer eerst of alles items in de startset zitten. Normaal gesproken zou je het vol...
                </p>
            </td>
            <td>
                <a href="https://support.air-up.com/nl/hoe-lang-werkt-een-pod-HJoepiIU5" target="_blank">
                Hoe lang werkt een pod?
                </a>
                <p>
                Eén pod geeft smaak aan tenminste 5 liter water!
                 Omdat onze smaken uit echte vruchten, planten en kruiden gehaald worden, zijn ze jammer genoeg niet onein...
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://support.air-up.com/nl/mijn-fles-lekt-hoe-kan-dat-ryOEk2ILq" target="_blank">
                Mijn fles lekt - hoe kan dat?
                </a>
                <p>
                Waarschijnlijk heb je de dop niet goed vastgedraaid.
                 De fles verliest dan een beetje water als je hem omkiept. 
                 Dit komt door het ingebouwde ontluchtingsventiel. ...
                </p>
            </td>
            <td>
                <a href="https://support.air-up.com/nl/mijn-pod-is-geactiveerd-maar-ik-proef-niets.-hoe-kan-dit-ryo2J3ULc" target="_blank">
                Mijn pod is geactiveerd maar ik proef niets. Hoe kan dit?
                </a>
                <p>
                Dit kan een paar oorzaken hebben. Loop eerst de volgende stappen door:
                 1. Controleer of je je fles in elkaar hebt gezet zoals op deze video te zien is. 2. I...
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://support.air-up.com/nl/hoe-maak-ik-de-fles-schoon-rJQchjUUc" target="_blank">
                Hoe maak ik de fles schoon?
                </a>
                <p>
                Met de hand, en met lauw water.
                 Bij het ontwerpen van onze producten vonden we het heel belangrijk dat je er lang van kunt genieten. 
                 Dit kan natuurlijk alleen al...
                </p>
            </td>
            <td>
                <a href="https://support.air-up.com/nl/drink-ik-echt-alleen-water-BkL0_jUIq" target="_blank">
                Drink ik echt alleen water?
                </a>
                <p>
                Ja, je drinkt echt 99.99% zuiver water.Natuurlijk waren we daar zelf ook nieuwsgierig naar. 
                Daarom hebben we al in 2017 een onderzoek uit laten voeren door het ...
                </p>
            </td>
        </tr>
        <tr>
            <td>
                <a href="https://support.air-up.com/nl/als-ik-een-slok-neem-komt-er-lucht-mee-en-hoor-ik-een-geluid.-is-dat-normaal-Hk9kJdcPc" target="_blank">
                Als ik een slok neem, komt er lucht mee en hoor ik een geluid. 
                Is dat normaal?
                </a>
                <p>
                Dit is heel normaal.
                 De luchtbelletjes die je ziet, zijn de "geurzenders" waardoor je de geur proeft. 
                 Bij het drinken slik je ze echter niet in, maar a...
                </p>
            </td>
            <td>
                <a href="https://support.air-up.com/nl/waar-is-mijn-air-up-bestelling-SJIHMuoJo" target="_blank">
                Waar is mijn air up bestelling?
                </a>
                <p>
                Zodra je bestelling ons magazijn heeft verlaten, ontvang je een verzendbevestiging per e-mail. 
                In dit bericht vind je ook informatie over welke vervoerder je pa...
                </p>
            </td>
        </tr>
    </table>
</section>

        </div>


        <?php include '../Assets/ContactFooter.php';?>
</body>
<script src="/Project-3/App.js"></script>
</html>