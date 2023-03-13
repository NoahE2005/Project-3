-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 mrt 2023 om 14:21
-- Serverversie: 10.4.25-MariaDB
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-3podsup`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(3) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Foto` varchar(999) NOT NULL,
  `Thema` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `accounts`
--

INSERT INTO `accounts` (`ID`, `Username`, `Email`, `Password`, `Foto`, `Thema`) VALUES
(1, 'Admin', 'Admin@Admin.com', '123', '', ''),
(2, 'steve', 'steve@e.com', '45', '', ''),
(3, 'John', 'john@email.com', 'zws', '', ''),
(4, 'zo', 'zo.zo@yahoo.com', 'wacht', '', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

CREATE TABLE `bestellingen` (
  `bestelling_ID` int(255) NOT NULL,
  `Account_ID` varchar(999) NOT NULL,
  `Product_ID` varchar(999) NOT NULL,
  `Klant_Adres` varchar(999) NOT NULL,
  `Klant_Land` varchar(999) NOT NULL,
  `Klant_Datum` varchar(999) NOT NULL,
  `Klant_BestelNummer` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `ID` int(250) NOT NULL,
  `Naam` varchar(999) NOT NULL,
  `Email` varchar(999) NOT NULL,
  `Land` varchar(999) NOT NULL,
  `Verkooppunt` varchar(999) NOT NULL,
  `Helpen` varchar(999) NOT NULL,
  `Bestellingsnummer` varchar(25) NOT NULL,
  `Onderwerp` varchar(999) NOT NULL,
  `Beschrijving` varchar(999) NOT NULL,
  `Datum` varchar(699) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`ID`, `Naam`, `Email`, `Land`, `Verkooppunt`, `Helpen`, `Bestellingsnummer`, `Onderwerp`, `Beschrijving`, `Datum`) VALUES
(1, 'Bob', 'Bob.wit@email.com', 'Nederland', 'Amazon', 'Product beschikbaarheid', 'dwadwda', 'dwadw', 'wda', '2023-02-16 08:50:40'),
(2, 'Piet', 'sam.pieter@yahoo.com', 'Australië', 'Anders', 'Mijn-fles-lekt', 'dwad', 'dawd', 'wadawd', '2023-02-16 08:53:36');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `producten`
--

CREATE TABLE `producten` (
  `ID` int(20) NOT NULL,
  `Soort` varchar(999) NOT NULL,
  `Naam` varchar(999) NOT NULL,
  `Foto` varchar(999) NOT NULL,
  `Prijs` varchar(999) NOT NULL,
  `Aantal` varchar(999) NOT NULL,
  `Beschrijving` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `producten`
--

INSERT INTO `producten` (`ID`, `Soort`, `Naam`, `Foto`, `Prijs`, `Aantal`, `Beschrijving`) VALUES
(1, 'Fles', 'Antraciet drinkfles incl. 3 Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FStarterset.jpg%3Fv%3D1674655698', '34,95', '12', 'Met onze verbeteringen zijn we uitgegaan van het Poka Yoke-principe. Dit betekent dat alle afzonderlijke onderdelen van onze drinkfles zo zijn gemaakt dat ze gemakkelijk en zonder problemen in elkaar gezet kunnen worden.'),
(2, 'Fles', 'Starter Set Wit incl. 2 Premium Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_starter-set-main_0001_-parl-whitePremium_onTangerine.jpg%3Fv%3D1638343488', '39,95', '29', 'Met onze verbeteringen zijn we uitgegaan van het Poka Yoke-principe. Dit betekent dat alle afzonderlijke onderdelen van onze drinkfles zo zijn gemaakt dat ze gemakkelijk en zonder problemen in elkaar gezet kunnen worden.'),
(3, 'Fles', 'Vibrant Green drinkfles incl. 3 Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_starter-set-main_0006_Bottle_TritanColors_3PP_Pods_VibrantGreen_EU_1.jpg%3Fv%3D1673873017', '39,95', '43', 'Meer dan gewoon water. De air up® drinkfles in Vibrant Green is pure energie. Welke smaak je ook gebruikt, al je zintuigen worden meteen gestimuleerd door deze heerlijk frisse kleur. Kun jij het aan?'),
(4, 'Fles', 'Ocean Blue drinkfles incl. 3 Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_starter-set-main_0010_Bottle_TritanColors_3PP_Pods_OceanBlue_EU.jpg%3Fv%3D1673872856', '39,95', '66', 'Een revolutie op het gebied van hydratatie, smaak en kleur! Heb een stranddag binnen hand bereik met je air up® fles in Ocean Blue.\r\nMet de air up® drinkfles begint een drinkgenot dat de wereld nog nooit heeft gezien, maar altijd heeft gewild. Simpel, lekker, gezond en duurzaam.'),
(5, 'Fles', 'Hot Pink drinkfles incl. 3 Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_starter-set-main_0011_Bottle_TritanColors_3PP_Pods_HotPink_EU_1.jpg%3Fv%3D1673872895', '39,95', '13', 'Een revolutie op het gebied van hydratatie, smaak en kleur! Maak je vrienden jaloers met een stijlvolle air up® fles in Hot Pink!\r\nMet de air up®-drinkfles begint een drinkgenot dat de wereld nog nooit heeft gezien, maar altijd heeft gewild. Simpel, lekker, gezond en duurzaam.'),
(6, 'Fles', 'Sunset Purple drinkfles incl. 3 Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_starter-set-main_0007_Bottle_TritanColors_3PP_Pods_SunsetPurple_EU_1.jpg%3Fv%3D1673873068', '39,95', '45', 'Of je nou ligt te chillen bij het zwembad, keihard werkt óf sport: laat de hele dag zien wie je bent met de Sunset Purple bundel.'),
(7, 'Fles', 'Royal Blue drinkfles incl. 3 Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_starter-set-main_0008_Bottle_TritanColors_3PP_Pods_RoyalBlue_EU_2.jpg%3Fv%3D1673872943', '39,95', '6', 'Deze Royal Blue drinkfles maakt water met smaak drinken pas echt koninklijk. Frisheid, stijl en gezondheid: wat wil een mens nog meer? Haal even diep adem voor je het leven in al zijn kleuren in je opneemt!'),
(8, 'Fles', 'Electric Orange drinkfles incl. 3 Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_starter-set-main_0012_Bottle_TritanColors_3PP_Pods_ElectricOrange_EU_1.jpg%3Fv%3D1673872750', '39,95', '45', 'Een revolutie op het gebied van hydratatie, smaak en kleur! Prikkel je zintuigen met een air up® fles in Electric Orange.\r\nMet de air up®-drinkfles begint een drinkgenot dat de wereld nog nooit heeft gezien, maar altijd heeft gewild. Simpel, lekker, gezond en duurzaam.'),
(9, 'Pods', 'Favourite Five Winter Edition', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_ConceptShot_FavFive_Box_winterEdition.jpg%3Fv%3D1675697183', '9,95', '34', 'Droom weg met heerlijke smaken. Deze limited edition smaakbundel bevat je favoriete winter geuren.'),
(10, 'Pods', 'Aardbei-Balsamico Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDPImage-Pods_Pouch.jpg%3Fv%3D1674647209', '7,95', '9', 'Deze limited edition smaak is heel wat gewaagder dan ananas op een pizza. Het combineert de zoete smaak van aardbei met het frisse zuurtje van balsamico. Niet voor niets hebben veel mensen het erover! Dit 3-pack pods geeft 15 liter water de heerlijke, originele smaak van aardbei-balsamico. Zit jij in team love it of team hell no?'),
(11, 'Pods', 'Appel-Kaneel pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Winter_Apple.jpg%3Fv%3D1674204139', '7,95', '14', 'Onze nieuwe en limited edition Appel-Kaneel pods zitten vol met heerlijke kerstgeuren. De beste manier om het gezellig te maken als het buiten koud is. Dit 3-pak pods verandert minstens 15 liter water in smaak.'),
(12, 'Pods', 'Kola Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Kola.jpg%3Fv%3D1674204042', '8,95', '21', 'Met onze set van 3 meer dan 15 liter vers water krijgen we een fantastisch zomeraroma. De eerlijkste kola-smaak die er bestaat - geen suiker, geen cafeïne, en geen andere toevoegingen. Drink zoveel \'cola met een k\' als je wilt, geniet van jouw guilty pleasure, zonder schuldgevoel. '),
(13, 'Pods', 'Bosvruchten Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Wild_Berry.jpg%3Fv%3D1674204122', '6,95', '16', 'Meer dan 15 liter vers water met een fantastisch fruitaroma. Het verschil? Geen suiker, geen calorieën. Ja! Suikerzoet maar zonder zonde. De set van 3 bosvruchtenPods brengt een vleugje nostalgie en puur genieten. Goed humeur bij elke slok. En als vrienden je nu vragen naar het geheim van je nieuwe permanente grijns: bessensmaak, 0% suiker, 100% gezond - het kan zo gemakkelijk zijn.'),
(14, 'Pods', 'IJsthee Perzik Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Iced_Tea_Peach.jpg%3Fv%3D1674204031', '8,95', '18', 'Als je zelf zo superhot bent, heb je soms iets nodig om goed af te kunnen koelen. Maak kennis met de Cooldown; de zelfgemaakte, zomerse ijstheesmaak waar je zo gek op bent, en waar je nu nog meer van zult houden. Dit 3-pack Pods verandert minstens 15 liter water in de smaak van ijsthee perzik.'),
(15, 'Pods', 'Favourite Five proefpakket', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_ConceptShot_FavFive_Box_V2.jpg%3Fv%3D1675697061', '12,95', '26', 'Waarom 1 smaak kiezen als je er 5 kunt proeven? Allemaal anders, en allemaal heel lekker. Met ons Favourite Five proefpakket proef je de heerlijke smaken van '),
(16, 'Pods', 'Ananas Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Pineapple.jpg%3Fv%3D1674203932', '7,95', '48', 'Ontdek nu onze meest exotische smaak ooit: ananas. Een smaak als een zon die nooit ondergaat, als een swingende beat die je overal begeleidt. Voel je het al? Met onze Ananas Pods geniet je van tot wel 15 liter tropisch water. Zonder suiker, maar met met een zomers gevoel in je buik.'),
(17, 'Pods', 'Cherry Kola Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Cherry_Kola.jpg%3Fv%3D1674204055', '8,95', '71', 'Een zoete sensatie en blast from the past, Retro Reload bezorgt bij elke slok die vintage kersen kola smaak waar we allemaal van houden. Dus, let\'s go back naar de Arcades en bombardeer dat \'game over\'-scherm tot herinnering met de kersen kola Pods! Deze 3-pack Pods tovert minstens 15 liter water om tot de smaak van kersen kola. Voeg voor een nóg hoger level bruisend water toe. Klaar voor een nieuwe topscore?'),
(18, 'Pods', 'Watermeloen Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Watermelon.jpg%3Fv%3D1674204135', '7,95', '13', 'Een watermeloen heeft een van de lekkerste en meest verfrissende fruitsmaken die er zijn. Onze nieuwste pod geeft je diezelfde heerlijke smaak, maar dan zonder de rommel die komt kijken bij het openmaken van zo’n ding! Met dit 3-pack van watermeloen pods kun je minstens 15 liter zuiver water omtoveren in de unieke smaak van watermeloen.Daarbij is onze verpakking nog eens veel makkelijker te openen dan zo’n groen monster.'),
(19, 'Pods', 'Vlierbloesem Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Elderflower.jpg%3Fv%3D1674203992', '8,95', '23', 'Wat kunnen we zeggen over vlierbloesem? Het is subtiel, klassiek en heerlijk verfrissend. De smaak van de lente, een nieuw begin met nieuwe kansen. En nu kun je al die gevoelens en emoties het hele jaar beleven, zonder toegevoegde suiker, zoetstoffen, of andere narigheden. Maak kennis met dit lentefeestje! Dit 3-pack aan Pods geeft smaak aan wel 15 liter water. Ervaar een vleugje subtiele heerlijkheid bij elke slok.'),
(20, 'Pods', 'Cassis Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Cassis.jpg%3Fv%3D1674203972', '5,95', '163', 'Je struint door een bloeiend lavendelveld, onbezorgd en rustig. Maar dan word je wakker. Je realiseert je ineens dat je Cassis Pod je heeft laten wegdromen bij het zien van je Zuid-Franse stilleven op het bureaublad van je laptopscherm! Heerlijk fruitig, verrassend uitgesproken en toch zacht. Deze Provençaalse parel voert je zo mee naar heerlijk zonnige oorden. Dit 3-pack Pods tovert minstens 15 liter water om in de smaak van sappige cassis.'),
(21, 'Pods', 'Sinaasappel-vanille Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Orange_Vanilla_Swirl.jpg%3Fv%3D1674203946', '6,95', '52', 'Dus jij denkt dat tijdreizen onmogelijk is? Niet voor ons, want wij hebben De Tijdcapsule, onze heerlijk nostalgische Vanille-Sinaasappel Pods! Elke slok voert je een beetje terug naar je kindertijd, waardoor je dagen gevuld zullen zijn met momenten van \"woahhh\" en \"yaaay\", van \'s morgens vroeg tot \'s avonds laat. Dit 3-pack Pods geeft minstens 15 liter water de heerlijke smaakcombinatie van romige vanille en friszure sinaasappel. Maar pas op, je wordt alleen in je gedachten naar je kindertijd teruggevoerd, \'s morgens moet je nog wel gewoon op je werk verschijnen...'),
(22, 'Pods', 'Mango-Passievrucht Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Mango_Passion_Fruit.jpg%3Fv%3D1674204074', '6,95', '45', 'De disco is net geopend, en we hebben het perfecte paar dat erop los swingt. De ene is zoet, de andere zuur. Ze zijn allebei lekker fruitig, en als ze samen zijn, zijn ze onweerstaanbaar. Ga swingend de lente in met onze Mango Passievrucht Pods. Een 3-pack geeft een heerlijke smaak aan wel 15 liter water, zodat jij gehydrateerd en verfrist de dansvloer op kunt voor ronde 2, 3, en 4!'),
(23, 'Pods', 'Perzik Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Peach.jpg%3Fv%3D1674204101', '5,95', '41', 'Met onze set van 3 stuks krijgt meer dan 15 liter fris water een zacht fruitaroma. Het hoofd zegt perzik, de maag zegt water en de gezondheid zegt dankjewel. Daarmee is alles wel gezegd. Nu moet je het alleen nog proberen.'),
(24, 'Pods', 'Kersen Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Cherry.jpg%3Fv%3D1674204048', '7,95', '37', 'Een beetje gek, maar nooit over het randje - dat kan alleen onze Kersen Pods zijn. Het is net als die ene vriend of vriendin waar de vonken vanaf schieten - maar dan zonder de vervelende trekjes. Deze verpakking met drie Pods geeft 15 liter zuiver water \r\nEen volledig suikervrije, sensationele smaak.'),
(25, 'Pods', 'Framboos-Citroen Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Raspberry_Lemon.jpg%3Fv%3D1674204013', '6,95', '22', 'Met onze set van 3 stuks krijgt meer dan 15 liter fris water een harmonieus zomeraroma. De framboos kust de citroen, een combinatie die niet zoeter of zuurder kan. Niet alleen een harmonieus samenspel qua kleur, maar ook een plezier in de neus, en dit alles zonder suiker of andere toevoegingen.'),
(26, 'Pods', 'Aardbei-Citroengras Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Strawberry_Lemongrass.jpg%3Fv%3D1674204037', '6,95', '15', 'Je rijdt door de straten. Het is nacht. Open dak. De neonreclames weerkaatsen op je gezicht. Deze nacht is van jou. Hij smaakt beter dan ooit. Onze Neon Nightlife smaak combineert rijpe aardbei met een vleugje citrusachtig citroengras. Samen zorgen ze voor een smaak die cooler is dan jouw look. Dit 3-pack Pods verandert minstens 15 liter water in de smaak van aardbei-citroengras.'),
(27, 'Pods', 'Limoen Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Lime.jpg%3Fv%3D1674204061', '5,95', '66', 'Met onze set van 3 stuks krijgen meer dan 15 liter fris water een heerlijk citrusaroma. Flessenpost uit de Caraïben. Van het kleine pittige zusje van de citroen. Een vleugje limoengeur bij je water brengt je in tropische sferen.'),
(28, 'Pods', 'Appel Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FApplepods.jpg%3Fv%3D1674203952', '5,95', '51', 'Met onze set van 3 stuks krijgen meer dan 15 liter fris water een verfijnd appelaroma. Zo puur was deze fruitklassieker nog nooit. Zonder schil, zaden, calorieën, suiker en al die duistere dingen die toch al niet in of op een appel thuishoren.'),
(29, 'Pods', 'Citroen Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Lemon.jpg%3Fv%3D1674203979', '5,95', '91', 'Klik citroen op je fles en geniet van een geurgedreven smaak die voelt als fris wakker worden zonder de snooze-knop aan te hoeven tikken. Als een gezond kuurtje na een heftige avond uit. 100% verfrissing. 0% slecht spul.'),
(30, 'Pods', 'IJskoffie Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Iced_Coffee.jpg%3Fv%3D1674204024', '8,95', '47', 'Begroet jij je koffieapparaat ook enthousiaster dan je collega’s? Dan is deze verpakking met drie decaf Koffie Pods echt iets voor jou. Het is genoeg voor 15 liter H2O met een verleidelijke koffiesmaak. IJskoffie-genot zoals op de piazza, maar dan zonder brain freeze, slapeloosheid en suiker natuurlijk. Een echte maestro. Of maestra, natuurlijk.\r\nJe waterbalans op orde houden was nog nooit zo elegant en verfrissend.'),
(31, 'Pods', 'Bosbes Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Blueberry.jpg%3Fv%3D1674203966', '5,95', '38', 'Op zoek naar een magische oplossing voor jouw zoete cravings? Tadaa, wij toveren zo een heerlijk bosbessentoetje voor je neus. Hemels zoet en helemaal suikervrij. Magie? Of gewoon het nieuwste idee uit de air up-fabriek? Wat maakt het ook allemaal uit; hier ermee! Eén pack met drie Pods van dit blauwe goud tovert tot wel 15 liter zuiver water om in drinkbare heerlijkheid. Laat air up jouw zoete cravings stillen, zonder de calorieën. Pas op, dit is verslavend!'),
(32, 'Pods', 'Sinaasappel-Passievrucht Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Orange_Passion_Fruit.jpg%3Fv%3D1674203938', '6,95', '74', 'Geen vakantieplannen? Geen probleem. Boek een enkeltje naar de tropen met deze Sinaasappel & Passievrucht Pods. Deze smaak voert je zonder moeite naar de dichtstbijzijnde palmboom en is als een fruitige cocktail - maar dan beter voor je beach body. Met drie Pods slurp je aan maar liefst 15 liter exotische H2O. Smaakt het beste bij salsa deuntjes en een licht briesje.'),
(33, 'Pods', 'Oranje Limonade Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Orangeade.jpg%3Fv%3D1674204088', '8,95', '61', 'Sunset Surprise geeft je de heerlijke, warme vibes van een zomerse zonsondergang, maar dan zonder al dat zand. Lange nachten, zwoele geuren, perfectie. En, als je deze smaak met bruiswater combineert, ervaar je de smaak nog beter. Dit 3-pack Pods tovert minstens 15 liter water in de smaak van prikkelende Oranje Limonade.'),
(34, 'Pods', 'Peer Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Pear.jpg%3Fv%3D1674204095', '5,95', '57', 'Het heeft misschien een wat ongebruikelijke vorm ten opzicht van z\'n fruitige vriendjes, maar wat een ongekende smaakbom is dit! Peer is één van de sappigste fruitsoorten die we kunnen bedenken. Proef de unieke smaak van rijpe peer, keer, op keer. Dit 3-pack Pods geeft ten minste 15 liter water de verfrissende smaak van peer.'),
(35, 'Pods', 'Pink Grapefruit Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Pink_Grapefruit.jpg%3Fv%3D1674204108', '7,95', '64', 'Opgelet: Pink Grapefruit is in the building. Een 3-pack van deze Pods geeft knallend veel bitterzoete frisheid aan 15 liter zuivere H2O. Te sappig om weg te zetten, te fris om te negeren. Grapefruit is geen doorsnee smaak. Het is een statement. Een publiekslieveling. Het soort superster met flair waar je ook gewoon dagelijks mee kunt hangen. Waarom een muurbloempje zijn als je geboren bent voor de spotlights?'),
(36, 'Pods', 'Mandarijn Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Tangerine.jpg%3Fv%3D1674204068', '7,95', '0', 'Met onze set van 3 stuks krijgt meer dan 15 liter fris water een aangenaam fruitaroma. Clementines hebben pitjes. Mandarijnen niet. En onze Mandarijn pod al helemaal niet! Deze trouwe metgezel maakt je dagelijks leven heerlijk smaakvol - ook buiten het mandarijnenseizoen!'),
(37, 'Pods', 'Lychee-Rose Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Lychee_Rose.jpg%3Fv%3D1674204115', '6,95', '16', 'We houden van je, en we vinden dat jij ook best wat meer van jezelf mag houden. Met je grappige trekjes, je unieke persoonlijkheid. Onze Lychee-Roos Pods fleuren je op met een heerlijk fluweelzachte finish. Precies hoe zelfliefde zou moeten zijn. En als er iets is dat we je gunnen, dan is het wel zelfliefde. Dit 3-pack Pods geeft minstens 15 liter zuiver water de verfijnde smaak van Lychee-Roos. Omdat je het waard bent.'),
(38, 'Pods', 'Komkommer Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Cucumber.jpg%3Fv%3D1674204004', '5,95', '32', 'Met onze set van 3 stuks krijgt meer dan 15 liter fris water een heerlijk komkommeraroma. Liever water dat naar komkommer smaakt dan een komkommer die naar water smaakt. Nou ja, een komkommer bestaat toch al voor 96% uit water. Het is alleen zo moeilijk te drinken.'),
(39, 'Pods', 'Basilicum-Citroen Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Basil-Lemon.jpg%3Fv%3D1674203959', '6,95', '49', 'Zeg vaarwel tegen de stress van je drukke schema. Hoe? Met de Zen Master, oftewel onze Citroen-Basilicum Pods! Ze zijn namelijk perfect om mee te detoxen, te hydrateren en tegelijk je hoofd te legen. Hoe stressvol je dag ook is, zen is maar een paar slokjes van je verwijderd. Dit 3-pack Pods verandert minstens 15 liter water in een heerlijke combinatie van scherpe citrus en frisse basilicum. Dus ful je fles, pak die rust en leeg je hoofd.'),
(40, 'Pods', 'Honingmeloen Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Honeydew-Melon.jpg%3Fv%3D1674204020', '7,95', '24', 'Iedereen kent wel een held. Ze staan altijd voor je klaar, en steken hun hoofd boven het maaiveld uit! Deze Pods zijn op die helden geïnspireerd. Zoet, fris en fruitig, meloenig EN geen plakkerige kin? *chefs kiss*. Dit pakket van 3 Pods geeft minstens 15 liter water de smaak van honingmeloen. Helden, jullie hielpen ons altijd, maar nu staan we achter jullie!'),
(41, 'Pods', 'Zoete kokos Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Sweet_Coconut.jpg%3Fv%3D1674204128', '7,95', '33', 'Wie maakt van een normale afspraak een onvergetelijk feest? Wij zeggen alleen maar: stille wateren hebben diepe gronden. Voor die mensen hebben we Jouw Zoete Kant! Een romige lekkernij met een dessert-achtig smaakje. Dit pakket van 3 Pods geeft ten minste 15 liter water de smaak van zoete kokos. Dus weg met dat saaie kokoswater! Maak plaats voor een nieuwe Pod...'),
(42, 'Pods', 'Citrus-Rozemarijn Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Yuzu_Rosemary.jpg%3Fv%3D1674204082', '6,95', '72', 'Onze Citrus-Rozemarijn Pods combineren de frisse, fruitige citrussmaak van yuzu met een vleugje heerlijk kruidige rozemarijn. Elke slok zal je keel laten zingen en je hart laten dansen! Dit 3-pack Pods verandert minstens 15 liter water in de smaak van Citrus-Rozemarijn. Proost op het leven!'),
(43, 'Pods', 'Guave Pods', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FPDP_Pouches_Pods_Guava.jpg%3Fv%3D1674203998', '7,95', '26', 'Fris, exotisch en pittig! We hebben het over de smaak van onze guave Pods, niet over een geheime liefde... Met zijn kruidige, kauwgom-achtige smaak, is guave nergens mee te vergelijken! Dit pakket van 3 Pods geeft minstens 15 liter water de smaak van guave. Maar kijk uit, na één slok zou je al spanning en sensatie kunnen vinden!'),
(44, 'Accessoires', 'Lila Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Strap_SoftLilac.jpg%3Fv%3D1674581974', '8,95', '40', 'Met onze verschillende draaglussen kan jij jouw air up® nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig worden vastgemaakt en verwisseld.\r\nMijn air up®, jouw air up®\r\n\r\nSiliconen draaglus in lila.\r\nGeef je fles een rustgevende look.'),
(45, 'Accessoires', 'Lila Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Mouthpiece_SoftLilac.jpg%3Fv%3D1674581927', '13,95', '26', 'Een reserve-mondstuk voor je air up® fles. Gemaakt van voedselveilige siliconen. Past naadloos op jouw air up® fles. Zorg dat je nooit zonder werkende fles komt te zitten, bestel een vervangend mondstuk. Maak van je fles een echt sieraad met ons lila mondstuk!'),
(46, 'Accessoires', 'Mintkleurige Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Strap_FreshMint.jpg%3Fv%3D1674581958', '8,95', '62', 'Met onze verschillende draaglussen kan iedereen zijn of haar air up® markeren en hem zo nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig aan de dop worden bevestigd en losgemaakt.'),
(47, 'Accessoires', 'Mintkleurig Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Mouthpiece_FreshMint.jpg%3Fv%3D1674581907', '13,95', '24', 'Een reserve-mondstuk voor je air up® fles. Gemaakt van voedselveilige siliconen. Past naadloos op jouw air up® fles. Zorg dat je nooit zonder werkende fles komt te zitten, bestel een vervangend mondstuk. Frisser dan dit wordt het niet. Bestel nu jouw mintkleurige mondstuk.'),
(48, 'Accessoires', 'Lichtblauwe Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_Accessories_Straps_RoseBlush.jpg%3Fv%3D1674581954', '6,95', '34', 'Met onze verschillende draaglussen kan iedereen zijn of haar air up® markeren en hem zo nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig aan de dop worden bevestigd en losgemaakt.\r\nMijn air up®, jouw air up®\r\n\r\nSiliconen draaglus in lichtblauw.\r\nHeeft een kalmerend effect en ziet er ook nog eens goed uit.'),
(49, 'Accessoires', 'Lichtblauw Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_Accessories_Mouthpiece_PaleBlue.jpg%3Fv%3D1674581914', '13,95', '31', 'Een reserve-mondstuk voor je air up® fles. Gemaakt van voedselveilige siliconen. Past naadloos op jouw air up® fles. Zorg dat je nooit zonder werkende fles komt te zitten, bestel een vervangend mondstuk. Maak jouw dag letterlijk een beetje lichter. Bestel nu ons lichtblauw mondstuk.'),
(50, 'Accessoires', 'Zwarte Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_Accessories_Straps_PitchPlack.jpg%3Fv%3D1674581947', '6,95', '0', 'Met onze verschillende draaglussen kan iedereen zijn of haar air up® markeren en hem zo nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig aan de dop worden bevestigd en losgemaakt.\r\nMijn air up®, jouw air up®'),
(51, 'Accessoires', 'Zwart Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_Accessories_Mouthpiece_PitchBlack.jpg%3Fv%3D1674581911', '11,95', '0', 'Dit mondstuk is een vervangingsonderdeel voor de air up®-starterset en is compatibel met alle andere onderdelen van het air up®-systeem'),
(52, 'Accessoires', 'Roze Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Strap_RoseBlush.jpg%3Fv%3D1674581965', '8,95', '16', 'Met onze verschillende draaglussen kan iedereen zijn of haar air up® markeren en hem zo nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig aan de dop worden bevestigd en losgemaakt.\r\nMijn air up®, jouw air up®\r\n\r\nSiliconen draaglus in roze.\r\nMaak een kleurrijk statement met je fles.'),
(53, 'Accessoires', 'Roze Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_Accessories_Mouthpiece_RoseBlush.jpg%3Fv%3D1674581921', '13,95', '56', 'Een reserve-mondstuk voor je air up® fles. Gemaakt van voedselveilige siliconen. Past naadloos op jouw air up® fles. Zorg dat je nooit zonder werkende fles komt te zitten, bestel een vervangend mondstuk. Vind jij ook dat de wereld te grijs en serieus is? Maak een roze statement!'),
(54, 'Accessoires', 'Ocean Blue Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Strap_OceanBlue.jpg%3Fv%3D1674581943', '6,95', '42', 'Met onze verschillende draaglussen kan iedereen zijn of haar air up® markeren en hem zo nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig aan de dop worden bevestigd en losgemaakt.\r\nMijn air up®, jouw air up®\r\n\r\nSiliconen draaglus in Ocean Blue.\r\nGeef je fles die zonnige surf vibe met deze Ocean Blue draaglus.'),
(55, 'Accessoires', 'Ocean Blue Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Mouthpiece_OceanBlue.jpg%3Fv%3D1674581901', '13,95', '33', 'Een reserve-mondstuk voor je air up® fles. Gemaakt van voedselveilige siliconen. Past naadloos op jouw air up® fles. Zorg dat je nooit zonder werkende fles komt te zitten, bestel een vervangend mondstuk. Denk aan de Middellandse Zee, terwijl je heerlijk zoet water drinkt.'),
(56, 'Accessoires', 'Hot Pink Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Strap_HotPink.jpg%3Fv%3D1674581968', '6,95', '71', 'Met onze verschillende draaglussen kan jij jouw air up® nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig worden vastgemaakt en verwisseld.\r\nMijn air up®, jouw air up®\r\n\r\nSiliconen draaglus in zuurstokroze.\r\nDe wereld hoeft niet grijs te zijn.'),
(57, 'Accessoires', 'Hot Pink Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Mouthpiece_HotPink.jpg%3Fv%3D1674581918', '13,95', '51', 'Een reserve-mondstuk voor je air up® fles. Gemaakt van voedselveilige siliconen. Past naadloos op jouw air up® fles. Zorg dat je nooit zonder werkende fles komt te zitten, bestel een vervangend mondstuk. Onderscheid je van de rest, maak van je fles een snoepje en kies voor ons Hot Pink mondstuk.'),
(58, 'Accessoires', 'Royal Blue Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Strap_RoyalBlue.jpg%3Fv%3D1674581950', '6,95', '48', 'Met onze verschillende draaglussen kan jij jouw air up® nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig worden vastgemaakt en verwisseld.\r\nMijn air up®, jouw air up®\r\n\r\nSiliconen draaglus in Royal Blue.\r\nGeef je fles een stoere, frisse look met onze Royal Blue draaglus.'),
(59, 'Accessoires', 'Royal Blue Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_PDP_Accessories_Mouthpiece_RoyalBlue.jpg%3Fv%3D1674581904', '13,95', '29', 'Een reserve-mondstuk voor je air up® fles. Gemaakt van voedselveilige siliconen. Past naadloos op jouw air up® fles. Zorg dat je nooit zonder werkende fles komt te zitten, bestel een vervangend mondstuk. Zoek jij een stoere look voor je fles? Kies dan dit Royal Blue mondstuk!'),
(60, 'Accessoires', 'Vibrant Green Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Strap_VibrantGreen.jpg%3Fv%3D1674581981', '8,95', '37', 'Men zegt dat het uiterlijk van een air up® fles veel over de persoon zegt. Waarom zou je je air up® fles niet persoonlijker maken met een gekleurde draaglus? Een subtiel accentje voor je fles? Nee! Maak een statement met Vibrant Green!'),
(61, 'Accessoires', 'Vibrant Green Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Mouthpiece_VibrantGreen.jpg%3Fv%3D1674581934', '13,95', '27', 'Een kleurrijk mondstuk voor jouw air up® fles. Scoor een reserve mondstuk en zorg ervoor dat je air up® systeem altijd werkt. Pimp je fles met een vibrant green mondstuk!'),
(62, 'Accessoires', 'Electric Orange Draaglus', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Strap_ElectricOrange.jpg%3Fv%3D1674581971', '6,95', '61', 'Met onze verschillende draaglussen kan jij jouw air up® nog unieker maken. De handige siliconen draaglussen kunnen eenvoudig worden vastgemaakt en verwisseld.\r\nMijn air up®, jouw air up®'),
(63, 'Accessoires', 'Electric Orange Mondstuk', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp_Accessories_Mouthpiece_ElectricOrange.jpg%3Fv%3D1674581924', '13,95', '67', 'Een reserve-mondstuk voor je air up® fles. Gemaakt van voedselveilige siliconen. Past naadloos op jouw air up® fles. Zorg dat je nooit zonder werkende fles komt te zitten, bestel een vervangend mondstuk. Droom jij \'s nachts van Italiaanse vakanties? Dan is een Electric Orange mondstuk iets voor jou!'),
(64, 'Accessoires', 'Neopreen Sleeve', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAIRUP_PDP_SpareParts_NeoprenSleeve.jpg%3Fv%3D1674581940', '12,95', '45', 'Onze air up® neopreen sleeve biedt optimale bescherming voor de air up® fles en isoleert de inhoud van de drinkfles.'),
(65, 'Accessoires', 'Schoonmaakborstel', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAIRUP_PDP_SpareParts_Brush.jpg%3Fv%3D1674581986', '5,95', '92', 'Schoon rietje, schoon water\r\nMet de handgemaakte schoonmaakborstel, gemaakt in Duitsland, blijft het air up®-rietje net zo schoon als het water in de fles.\r\nHet reinigingsborsteltje kun je niet alleen gebruiken om je rietje schoon te maken, maar stelt je ook in staat om het mondstuk van je air up drinkfles grondig te reinigen.'),
(66, 'Accessoires', 'Dop Wit', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-PearlWhite_Lid.jpg%3Fv%3D1674581897', '9,95\r\n', '49', 'Deze witte dop is een vervangend onderdeel van de air up® starterset en is compatibel met alle andere onderdelen van het air up® systeem'),
(67, 'Accessoires', 'Body Wit', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-PearlWhite_Body.jpg%3Fv%3D1674581866', '14,95', '17', 'De body van de witte drinkfles is perfect compatibel met alle andere onderdelen van het air up®-systeem'),
(68, 'Accessoires', 'Dop Antraciet', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-Charcoal_Lid.jpg%3Fv%3D1674581869', '7,95', '24', 'Deze dop is een vervangend onderdeel van de air up® starterset en is compatibel met alle andere onderdelen van het air up® systeem'),
(69, 'Accessoires', 'Body Antraciet', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-Charcoal_Body.jpg%3Fv%3D1674581842', '12,95', '63', 'De body van de drinkfles is perfect compatibel met alle andere onderdelen van het air up®-systeem'),
(70, 'Accessoires', 'Dop Ocean Blue', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-OceanBlue_Lid.jpg%3Fv%3D1674581881', '9,95', '17', 'Maak je fles een beetje persoonlijker met deze air up® dop in Ocean Blue. Koop hem als vervanger of voeg gewoon sowieso wat kleur toe aan je leven. Let\'s go!'),
(71, 'Accessoires', 'Body Ocean Blue', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-OceanBlue_Body.jpg%3Fv%3D1674581852', '14,95', '49', 'Maak je air up® een beetje persoonlijker met onze body in Ocean Blue. Koop hem als vervanger of geef gewoon sowieso wat kleur aan je leven. Let\'s go!'),
(72, 'Accessoires', 'Dop Electric Orange', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-ElectricOrange_Lid.jpg%3Fv%3D1674581873', '9,95', '53', 'Maak een verpletterende indruk met onze air up® dop in Electric Orange. Koop hem als vervanger of voeg gewoon sowieso meer kleur toe aan je leven. Wees creatief!'),
(73, 'Accessoires', 'Body Electric Orange', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-ElectricOrange_Body.jpg%3Fv%3D1674581845', '14,95', '36', 'Maak een verpletterende indruk met onze air up® body in Electric Orange. Koop hem als vervanger of voeg gewoon sowieso wat kleur toe aan je leven. Wees creatief!'),
(74, 'Accessoires', 'Dop Sunset Purple', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-SunsetPurple_Lid.jpg%3Fv%3D1674581891', '9,95', '63', 'Voor wie het zich afvraagt: ja, dit is dezelfde dop als die van de Sunset Purple air up® fles. Dus, maak je geen zorgen, je mist niets. Deze is voor iedereen die zijn dop moet vervangen of gewoon zin heeft in een ander kleurtje.'),
(75, 'Accessoires', 'Body Sunset Purple', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-SunsetPurple_Body.jpg%3Fv%3D1674581859', '14,95', '35', 'Laat de wereld zien hoe cool je bent met onze Sunset Purple air up® body. Koop hem als reserveonderdeel of voor meer kleur in je leven! Word creatief!'),
(76, 'Accessoires', 'Dop Hot Pink', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-HotPink_Lid.jpg%3Fv%3D1674581877', '9,95', '52', 'Wil je een statement maken? Dit is onze air up® dop in Hot Pink. Koop hem als vervanger of breng gewoon sowieso meer kleur in je leven. Wees creatief!'),
(77, 'Accessoires', 'Body Hot Pink', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-HotPink_Body.jpg%3Fv%3D1674581849', '14,95', '46', 'Wil je een statement maken? Maak kennis met onze air up® body in Hot Pink. Koop hem als vervanger of breng gewoon sowieso meer kleur in je leven. Wees creatief!'),
(78, 'Accessoires', 'Dop Royal Blue', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-RoyalBlueLid.jpg%3Fv%3D1674581884', '9,95', '84', 'Voor wie het zich afvraagt: ja, dit is dezelfde dop als die van de Royal Blue air up® fles. Dus, maak je geen zorgen, je mist niets. Deze is voor iedereen die zijn dop moet vervangen of gewoon zin heeft in een ander kleurtje.'),
(79, 'Accessoires', 'Body Royal Blue', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-RoyalBlue_Body.jpg%3Fv%3D1674581856', '14,95', '83', 'Maak elke slok stijlvol met deze Royal Blue air up® body. Koop hem als reserveonderdeel of voor meer kleur in je leven! Word creatief!'),
(80, 'Accessoires', 'Dop Vibrant Green', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-SparePart-VibrantGreen_Lid.jpg%3Fv%3D1674581894', '9,95', '53', 'Voor wie het zich afvraagt: ja, dit is dezelfde dop als van de Sunset Purple air up® fles. Dus, maak je geen zorgen, je mist niets. Deze is voor iedereen die zijn dop moet vervangen of gewoon zin heeft in een ander kleurtje.'),
(81, 'Accessoires', 'Body Vibrant Green', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUP-SparePart-SparePart-VibrantGreen_Body.jpg%3Fv%3D1674581862', '14,95', '64', 'Wees loud & proud met de Vibrant Green air up® body. Haal hem als reserveonderdeel in huis of gewoon voor meer kleur in je leven! Word creatief!'),
(82, 'Accessoires', 'Rietje', 'https://nl.air-up.com/_ipx/f_webp,w_1800,q_75/https%3A%2F%2Fcdn.shopify.com%2Fs%2Ffiles%2F1%2F0577%2F9170%2F9366%2Fproducts%2FAirUp-SparePart-Charcoal_Straw.jpg%3Fv%3D1674581990', '6,95', '195', 'Dit rietje is een vervangend onderdeel voor de air up®-starterset en is compatibel met alle andere onderdelen van het air up®-systeem');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(6) NOT NULL,
  `Product_ID` int(255) NOT NULL,
  `Account_ID` varchar(999) NOT NULL,
  `Naam` varchar(999) NOT NULL,
  `Email` varchar(999) NOT NULL,
  `Sterren` int(1) NOT NULL,
  `ReviewTitel` varchar(999) NOT NULL,
  `Datum` varchar(999) NOT NULL,
  `Beschrijving` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`ID`, `Product_ID`, `Account_ID`, `Naam`, `Email`, `Sterren`, `ReviewTitel`, `Datum`, `Beschrijving`) VALUES
(1, 43, '2', 'John', 'john@email.com', 5, 'Goed', '2023-02-24 10:40:13', 'Best een goed product'),
(2, 3, '2', 'John', 'john@email.com', 4, 'Goed', '2023-02-24 10:41:57', 'Mooie kleur, ik ben er blij mee'),
(3, 11, '2', 'John', 'john@email.com', 5, 'Beste smaak', '2023-02-24 10:43:19', 'heel lekker'),
(4, 10, '3', 'zo', 'zo.zo@yahoo.com', 4, 'Heel goed', '2023-02-24 10:45:07', 'ik hou van dit product!');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `winkelwagen`
--

CREATE TABLE `winkelwagen` (
  `Winkelwagen_ID` int(25) NOT NULL,
  `Aantal` int(255) NOT NULL,
  `Product_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`bestelling_ID`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `winkelwagen`
--
ALTER TABLE `winkelwagen`
  ADD PRIMARY KEY (`Winkelwagen_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  MODIFY `bestelling_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `producten`
--
ALTER TABLE `producten`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT voor een tabel `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `winkelwagen`
--
ALTER TABLE `winkelwagen`
  MODIFY `Winkelwagen_ID` int(25) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
