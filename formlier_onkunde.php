<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mad Libs - Onkunde</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Permanent+Marker" rel="stylesheet">

    <link rel="stylesheet" href="opdracht.css">
    <link href="https://fonts.googleapis.com/css?family=Archivo" rel="stylesheet">
</head>
<body>
<h1>Mad Libs</h1>
<div class="container_onkunde">
    <div class="nav">
        <a href="opdracht.html">Er heerst paniek...</a>
        <a href="opdracht_onkunde.html">Onkunde</a>
    </div>

    <?php
    function changeInput($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $strings = ["kunnen", "persoon", "getal", "voorwerp", "eigenschap", "seigenschap", "overkomen"];
    $data = [];
    $dataErr = [];
    foreach ($strings as $value) {
        $data[$value] = "";
        $dataErr[$value] = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST[$value])) {
                $dataErr[$value] = "Dit veld is verplicht";
            }
            else {
                $data[$value] = changeInput($_POST[$value]);
            }
        }
    }
    ?>

    <h2><b>Onkunde</b></h2>
    <div id="content">
        <form  class="form-horizontal" action="formlier_onkunde.php" method="post">

            <div class="form-group">
                <label class="col-sm-6" for="kunnen" style="margin-top: 5px">Wat zou je graag willen kunnen?</label> <span class="error"> <?php echo $dataErr["kunnen"]?></span>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="kunnen" name="kunnen" value="<?php echo $data["kunnen"] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6" for="persoon">Met welke persoon kun je goed opschieten??</label> <span class="error"> <?php echo $dataErr["persoon"]?></span>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="persoon" name="persoon" value="<?php echo $data["persoon"] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6" for="getal">Wat is je favoriete getal?</label> <span class="error"> <?php echo $dataErr["getal"]?></span>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="getal" name="getal" value="<?php echo $data["getal"] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6" for="voorwerp">Wat heb je altijd bij je als je op vakantie gaat?</label> <span class="error"> <?php echo $dataErr["voorwerp"]?></span>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="voorwerp" name="voorwerp" value="<?php echo $data["voorwerp"] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6" for="eigenschap">Wat is je beste persoonlijke eigenschap</label> <span class="error"> <?php echo $dataErr["eigenschap"]?></span>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="eigenschap" name="eigenschap" value="<?php echo $data["eigenschap"] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6" for="seigenschap">Wat is je slechtste persoonlijke eigenschap?</label> <span class="error"> <?php echo $dataErr["seigenschap"]?></span>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="seigenschap" name="seigenschap" value="<?php echo $data["seigenschap"] ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-6" for="overkomen">Wat is het ergste dat je kan overkomen?</label> <span class="error"> <?php echo $dataErr["overkomen"]?></span>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="overkomen" name="overkomen" value="<?php echo $data["overkomen"] ?>">
                </div>
            </div>
        <div class="submit2">
            <input type="submit" id="submit">
        </div>
        </form>
    </div>

    <div id="result">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $data = [];
            $dataErr = [];
            $canProcess = true;
            foreach ($strings as $value) {
                if (empty($_POST[$value])) {
                    $canProcess = false;
                    break;
                }
                else {
                    $data[$value] = changeInput($_POST[$value]);
                }
            }
            if ($canProcess) {
                echo
                "<script>
            document.getElementById('content').style.display = 'none';
            document.getElementById('result').style.display = 'block';
            </script>";
                echo "Er zij veel mensen die niet kunnen " . $data["kunnen"] . ". " .
                    "Neem nou " . $data["persoon"] . ". " .
                    "Zelfs met de hulp van een " . $data["voorwerp"] . " of zelfs tien kan " . $data["persoon"] . " niet " . $data["kunnen"] . ". " .
                    "Dat heeft niet te maken met een gebrek aan " . $data["eigenschap"] . ", maar met een te veel aan " . $data["seigenschap"] . ". " .
                    "Te veel " . $data["seigenschap"] . " leidt tot " . $data["overkomen"] . " en dat is niet goed als je wilt " . $data["kunnen"] . ". " .
                    "Helaas voor " . $data["persoon"] . ".";
            }
        }
        ?>
    </div>
    <div class="footer">
        <p>© 2019, Aya Mohammad</p>
    </div>
</div>
</body>
</html>