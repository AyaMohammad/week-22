<!doctype html>

<html lang="nl">

<head>
    <meta charset="utf-8">

    <title>MAD LIBS</title>
    <meta name="description" content="Aya Mohammad">
    <meta name="author" content="SitePoint">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0″ />
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Permanent+Marker" rel="stylesheet">

    <link rel="stylesheet" href="opdracht.css">

</head>

<body>
    <h1>MAD LIBS</h1>

    <div class="container">
        <div class="nav">
            <a href="opdracht.html">Er heerst paniek...</a>
            <a href="opdracht_onkunde.html">Onkunde</a>
        </div>
        <h2><b>Onkunde</b></h2>
        <?php
            echo "<p>", "Er zijn mensen die niet kunnen ", $_POST["vraag_onkunde1"], ". Neem nou ", $_POST["vraag_onkunde2"], ". Zelfs met de hulp <br>
            van een ", $_POST["vraag_onkunde4"], " of zelfs ", $_POST["vraag_onkunde3"], " kan meneer ", $_POST["vraag_onkunde2"], " niet ", $_POST["vraag_onkunde1"], ". <br>";
            echo " Dat heeft niet te maken met het gebrek van ", $_POST["vraag_onkunde5"], ", maar met teveel aan ", $_POST["vraag_onkunde6"], 
            ". <br> Teveel ", $_POST["vraag_onkunde6"], " leidt tot ", $_POST["vraag_onkunde7"], "<br> en dat is niet goed als je wilt ", $_POST["vraag_onkunde1"], 
            ". Helaas voor meneer ", $_POST["vraag_onkunde2"], ".", "</p>";       
            
        ?>       
        <div class="footer">
            <p>© 2019, Aya Mohammad</p>
        </div>
    </div>
</body>

</html>
