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


      <form method="post" action="mood.php">
        <p>
          <label>Welk dier zou je nooit als huisdier willen hebben?</label>
          <input type="text" name="dier" />
        </p>

        <p>
          <label>Wie is de belangrijkste persoon in je leven?</label>
          <input type="text" name="persoon" />
        </p>

        <p>
          <label>In welk land zou je graag willen wonen?</label>
          <input type="text" name="land" />
        </p>

        <p>
          <label>Wat doe je als je je verveelt?</label>
          <input type="text" name="verveel" />
        </p>

        <p>
          <label>Met welk speelgoed speelde je als kind het meest?</label>
          <input type="text" name="speelgoed" />
        </p>
        <p>
          <label>Bij welke docent spijbel je het liefst?</label>
          <input type="text" name="spijbel" />
        </p>
        <p>
          <label>Als je &euro;100.000.- had, wat zou je dan kopen?</label>
          <input type="text" name="euro" />
        </p>
        <p>
          <label>Wat is je favoriete bezigheid?</label>
          <input type="text" name="bezigheid" />
        </p>

      <label>&nbsp;</label>
        <p>
          <input type="submit" value="Versturen" />
        </p>
      </form>
      </div>
    </div>
  </div>
</body>
</html>



