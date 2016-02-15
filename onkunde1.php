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

      <h2> Onkunde! </h2>
        <p>Er zijn veel mensen die niet kunnen <?php echo $_POST["willen"] ?> . Neem nou voorbeeld aan <?php echo $_POST["persoon"] ?>.
        Zelfs met de hulp van een <?php echo $_POST ["getal"] ?> of zelfs <?php echo $_POST["vakantie"] ?> kan <?php echo $_POST["beste"] ?> niet <?php echo $_POST["slechte"] ?>.
        Dat heeft niet te maken met een gebrek aan <?php echo $_POST["willen"] ?>, maar met een te veel aan <?php echo $_POST["vakantie"] ?>.
        Te veel <?php echo $_POST["ergste"] ?> leidt tot <?php echo $_POST["beste"] ?> en dat is niet goed als je wilt <?php echo $_POST["slechte"] ?>.
        Helaas voor <?php echo $_POST["ergste"] ?>.</p>
      </div>

      

    </div>
  </div>
</body>
</html>



