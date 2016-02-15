<doctype html/>
<html>
<head>
  <title>Madlibs formulier</title>
  <link href="madlibs.css" rel="stylesheet" type="text/css" />
</head>

<body>
  <div class="container">
    
      <h1> Mad Libs </h1>
      <ul>
        <li><a href="http://localhost/madlibs/madlibs.php">Er heerst paniek</a></li>
        <li><a href="http://localhost/madlibs/onkunde.php">Onkunde</a></li>
      </ul>
    <div class="background"> 
      <div class="text">


      <h2> Er heerst paniek! </h2>
      <p>Er heerst paniek in het koninkrijk <?php echo $_POST["dier"] ?>. Koning <?php echo $_POST["persoon"] ?> is ten einde raad en als koning <?php echo $_POST["persoon"] ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["land"] ?>. "<?php echo $_POST["verveel"] ?>! Het is een ramp! Het is een schande!" "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?" "Mijn <?php echo $_POST["speelgoed"] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["spijbel"] ?> voor hem gekocht!""Majesteit, uw <?php echo $_POST["speelgoed"] ?>  komt vast vanzelf weer terug?""Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd 
      <?php echo $_POST["bezigheid"] ?> leren?""Maar Sire, daar kunt u toch uw <?php echo $_POST["dier"] ?> voor gebruiken.""<?php echo $_POST["land"] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had." "<?php echo $_POST["persoon"] ?>, Sire." </p>


      
      </div>
    </div>
  </div>
</body>
</html>



