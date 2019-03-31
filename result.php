<!doctype html>

<html lang="nl">

<head>
    <meta charset="utf-8">

    <title>MAD LIBS</title>
    <meta name="description" content="Theus de Zeeuw">
    <meta name="author" content="SitePoint">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″ />

    <link rel="stylesheet" href="opdracht.css">

</head>

<body>
    <h1>MAD LIBS</h1>

    <div class="container">
        <div class="nav">
            <a href="opdracht.html">Er heerst paniek...</a>
            <a href="opdracht_onkunde.html">Onkunde</a>
        </div>
        <h2>Er heerst paniek...</h2>
        <?php
            echo "<p>", "Er heerst paniek in het koninkrijk ", $_GET["vraag3"], ". Koning ", $_GET["vraag6"], " is ten einde raad en als koning <br>", 
            $_GET["vraag6"], " ten einde raad is, dan roept hij zijn ten-einde-raadsheer ", $_GET["vraag2"], ".", "<br>";
            echo $_GET["vraag2"], " Het is een ramp! Het is een schande!", "<br>";
            echo "Sire, Majestieit. Uwe luidruchtigheid, wat is er aan de hand?", "<br>";
            echo "Mijn ", $_GET["vraag1"], " is verdwenen, Zo maar, zonder waarschuwing. En ik had net ", $_GET["vraag5"], " voor hem gekocht! <br>";
            echo "Majesteit, uw ", $_GET["vraag1"], " komt vast vanzelf terug! <br>";
            echo "Ja da's leuk en aardig, maar hoe moet ik nu in de tussentijd ", $_GET["vraag8"], " leren? <br>";
            echo "Maar Sire, daar kunt u toch uw ", $_GET["vraag7"], " voor gebruiken. <br>";
            echo $_GET["vraag2"], ", je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had. <br>";
            echo "Mij ", $_GET["vraag4"], ", Sire.", "</p>";
        ?>      
        <div class="footer">
            <p>© Gemaakt door: Aya Mohammad</p>
        </div>
        </div>
</body>
</html>