<?php require '/Xampp/htdocs/Project-3/DatabasePuller.php'; ?>
<?php 
    $CurrentID = 3;
echo "
    <script>
  var urlParams = new URLSearchParams(window.location.search);
  var id = urlParams.get('id');
  console.log(id);

  var xhr = new XMLHttpRequest();
  xhr.open('GET', '?id=' + id, true);
  xhr.onreadystatechange = function() {
    if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
      console.log(this.responseText);
    }
  };
  xhr.send();
</script>
    ";
    if (isset($_GET['id'])) {
        $CurrentID = $_GET['id'];
      }
      ?>
    
    <?php
    echo "
    <!-- Review maken -->
    <button class='OrangeButton' id='ReviewFormButton' onclick='ToggleReview()'>Review schrijven</button>
    <form action='/Project-3/Assets/Database/Create_Review.php?id=$CurrentID' id='ReviewForm' method='post'>
    <h2>Naam</h2>
    <input type='text' name='Naam' required value='";
    if (isset($_SESSION['account_id'])) {
      echo $Account_Username[(int)$_SESSION['account_id']];
    }
    echo"'>
    <br>

    <h2>Email</h2>
    <input type='email' name='Email' required value='";
    if (isset($_SESSION['account_id'])) {
      echo $Account_Email[(int)$_SESSION['account_id']];
    }
    echo"'>
    <h2 value='$CurrentID'></h2>

    <h2>Sterrenrating</h2>
    <div class='rating'>
    <input type='radio' id='star5' name='SterrenRating' value='5'/>
    <label for='star5' title='Fantastisch'>&#9733;</label>
    <input type='radio' id='star4' name='SterrenRating' value='4'/>
    <label for='star4' title='Goed'>&#9733;</label>
    <input type='radio' id='star3' name='SterrenRating' value='3'/>
    <label for='star3' title='Gemiddeld'>&#9733;</label>
    <input type='radio' id='star2' name='SterrenRating' value='2'/>
    <label for='star2' title='Slecht'>&#9733;</label>
    <input type='radio' id='star1' name='SterrenRating' value='1'/>
    <label for='star1' title='Waardeloos'>&#9733;</label>
  </div>
    <br>

    <h2>Titel</h2>
    <input type='text' name='Titel' required>
    <br>
    <h2>Beschrijving</h2>
    <input type='text' name='Beschrijving' required>
    <br><br>
    ";
    if (isset($_SESSION['account_id'])) {
        echo "<input type='button' value='Annuleren' onclick='ToggleReview()' class='OrangeButton'><input type='submit' class='OrangeButton'>";
    }
    else {
      echo "<input type='button' value='U moet in gelogd zijn' onclick='ToggleReview()' class='OrangeButton'>";
    }
echo "
</form>
<br><br>";

?>

<div class="ReviewTabelFlex">
    <?php
    for ($i = 0 ; $i < count($Reviews_ID); $i++) { 
        if($Reviews_Product_ID[$i] == $CurrentID) {
            echo 
            "
            <div class='ReviewTabelElementContainer'>
            <div class='ReviewTabelElement'>
            <h1>$Reviews_Naam[$i]</h1>
            Deze review is gemaakt op $Reviews_Datum[$i]
        </div>
        <div class='ReviewTabelElement'>
        <br><h3>$Reviews_Sterren[$i] Sterren</h3>
        <h1>$Reviews_Titel[$i]</h1>
        <p>
        $Reviews_Beschrijving[$i]
        </p>
</div>
</div>
        <br>
            ";
        }
    }
    ?>
    </div>

    <style>
#ReviewForm {
  display: none;
}
/* 
#ReviewForm{
  display: flex;
  flex-direction: row;
} */

.ReviewTabelFlex {
  display: flex;
  flex-direction: column-reverse;
}

.ReviewTabelElementContainer {
  border: solid 0.1vw black;
  border-radius: 1vw;
  padding: 2vw;
  min-width: 100%;
  width: 30vw;
  float: left;
  display: flex;
  flex-direction: row;
}
      
.ReviewTabelElement {
  background-color: #fcfcfc;
  display: flex;
  flex-direction: column;
  margin: 0vw 2vw;
}

.ReviewTabelElement div {
  display: flex;
  flex-direction: column;
  
}

.ReviewTabelElement div, .ReviewTabelElement div p {
  padding: 1vw;
}

.ReviewTabelElement h1 {
  font-size: 1.5vw;
}

.rating {
  display: inline-block;
  position: relative;
  height: 30px;
  line-height: 30px;
  font-size: 24px;
}
.rating input {
  display: none;
}
.rating label {
  color: #bbb;
  float: right;
}
.rating label:before {
  content: "\f005";
  font-family: FontAwesome;
  margin-right: 5px;
  color: #F2B600;
}
.rating input:checked + label:before {
  color: #FCD000;
}
.rating:hover input:not(:checked) + label:before,
.rating:hover input:not(:checked) + label:hover:before {
  color: #FCD000;
}
    </style>
    <script>
      function ToggleReview() {
        var Form = document.getElementById("ReviewForm")
        if(Form.style.display == "block") {
          Form.style.display = "none";
          document.getElementById("ReviewFormButton").style.display = "block"
        }
        else {
          Form.style.display = "block";
          document.getElementById("ReviewFormButton").style.display = "none"
        }
      }
    </script>