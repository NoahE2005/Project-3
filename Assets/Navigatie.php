<?php 
if(session_status() !== PHP_SESSION_ACTIVE) {session_start();}
?>

<html>
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/Project-3/MainStylesheet.css">
    </head>
    <body>
    <header>
        <h1>Pods up</h1>
    </header>
<nav>
    <br>
    <div>
        <a href="/Project-3/Index.php">Home</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Flessen/Flessen.php">Flessen</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Pods/Pods.php">Pods</a>
        <div>|</div>
        <a href="/Project-3/WinkelPagina/Accessories/Accessories.php">Accessories</a>
</div>
<div class="SecondNav">
    <a href="/Project-3/Support/OverOns.php">Over ons</a>
    <div>|</div>
    <a href="/Project-3/Support/VeelgesteldeVragen.php">Hulp</a>
    <div>|</div>
    <a href="/Project-3/Contact/Contact.php">Contact</a>
    <div>|</div>
    <div>
        <form action="/Project-3/WinkelPagina/ZoekProductPagina.php" method="post">
     <input class="NavZoekText" type="text" name="ZoekProductText">
     <input class="NavZoekSubmit" type="submit" value="Zoek">
     </form>
    </div>
    </nav>
    <div class="HeaderDiv">

            <div class="dropdown" onclick="location.href='/Project-3/Account/Load_Account.php'">
            <button class="dropbtn Icons1"><i class="fa fa-user-circle Fa-Icon" style="font-size:2.5vw"></i></button>
            <?php if (isset($_SESSION['account_id'])) {
                $ovz = "Overzicht";
                $rev = "Reviews";
                $set = "Settings";
                echo '
                <div class="dropdown-content">
                <div class="dropdown-content2">
                  <a href="/Project-3/Account/Load_Account.php?page=' . $ovz .'">Overzicht</a>
                  <a href="/Project-3/Account/Load_Account.php?page=' . $rev .'">Reviews</a>
                  <a href="/Project-3/Account/Load_Account.php?page=' . $set .'">Settings</a>
                  <a href="/Project-3/Account/LogOut.php">Uitloggen</a>
              </div>
                </div>
                ';
                } ?>
</div>
            <button class="dropbtn Icons2" onclick="location.href='/Project-3/WinkelPagina/WinkelWagen.php'"><li class="fa fa-shopping-cart Fa-Icon" style="font-size:2.5vw"></li></button>
        </div>
    </body>

    <style>
        header {
    background-color: white;
    border-bottom: black solid 0.1vw;
    width: 100%;
}

.HeaderDiv {
    float: right;
    position: absolute;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    justify-content: space-evenly;
    margin-left: 90%;
    right: 1;
    background-color: rgb(218, 218, 218);
    border-radius: 25vh;
    height: 7.3vh;
    width: 8vw;
}

nav {
    margin: 0 32vw;
    margin-bottom: 2vw;
    border-radius: 25vh;
    height: 7.3vh;
    width: 35vw;
    z-index: 2;
    position: absolute;
    transition: 0.7s;
    color: grey;
    font-size: 1vw;
}

nav:hover {
    height: 13vh;
    transition: 0.7s;
    border-radius: 12.5vh;
}

nav:hover .SecondNav {
    transition: 0.7s;
    opacity: 1;
    height: 8vh;
}

nav:hover .SecondNav div {
    transition: 0.7s;
    opacity: 1;
}

nav div {
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    align-items: center;
}

nav a {
    color: grey;
    text-decoration: none;
}

nav a:hover {
    color: red;
}

.HeaderDiv {
    float: right;
}

.HeaderDiv, nav {
    background-color: rgb(245, 245, 245);
    border: black 0.05vw solid;
}

.SecondNav {
    z-index: 1;
    transition: 0.7s;
    opacity: 0;
    height: 0vh;
}

.NavZoekSubmit {
    border: none;
    background-color: inherit;
    font-size: 1vw;
    color: grey;
    font-family: 'Proxima Nova', sans-serif;
}

.NavZoekSubmit:hover {
    cursor: pointer
}

.NavZoekText {
    width: 0vw;
    right: 5.8vw;
    z-index: 3;
    position: absolute;
    opacity: 0;
    transition: 0.7s;
}

form:hover .NavZoekText {
    transition: 0.7s;
    right: 5.8vw;
    width: 15vw;
    opacity: 1;
}

.HeaderDiv, nav {
    margin-top: 1vw;
    position: fixed;
    z-index: 3;
}

header h1 {
    margin-left: 1vw;
}

nav {
  top: 3.5vw;
}

.HeaderDiv {
  position: fixed;
  top: 3.5vw;
  transition: top 0.7s;
}

.Icon1, .Icon2 {
    transition: 0.7s;
}

.dropbtn {
  font-size: 16px;
  border: none;
  background-color: inherit;
}

.dropbtn:hover {
    cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 5vw;
  padding-top: 1vw;
  background-color: inherit;
  right: 0;
}

.dropdown-content2 {
  display: none;
  background-color: #f1f1f1;
  min-width: 10vw;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  right: 0;
  border-radius: 2vw;
  padding: 2vw 0vw;
  text-align: right;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropdown-content2 {display: block;}
    </style>
    <script>
const navbar = document.querySelector('nav');
const headerDiv = document.querySelector('.HeaderDiv');
const Icon1 = document.querySelector('.Icons1');
const Icon2 = document.querySelector('.Icons2');
let prevScrollpos = window.pageYOffset;

window.onscroll = function() {
  const currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    navbar.style.top = '4.7vh';
    headerDiv.style.top = '4.7vh';
    //Icon1.style.opacity = '1';
    //Icon2.style.opacity = '1';
  } else {
    navbar.style.top = '-7.3vh';
    headerDiv.style.top = '-7.3vh';
    //Icon1.style.opacity = '0';
    //Icon2.style.opacity = '0';
  }
  prevScrollpos = currentScrollPos;
}
    </script>

</html>