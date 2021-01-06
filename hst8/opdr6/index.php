<?php

include_once("autoFilter.php");

$banddikte = isset($_GET["banddikte"]) ? $_GET["banddikte"] : "";
$merk = isset($_GET["merk"]) ? $_GET["merk"] : "";
$minprijs = isset($_GET["min-prijs"]) ? $_GET["min-prijs"] : 0;
$maxprijs = isset($_GET["max-prijs"]) ? $_GET["max-prijs"] : 99999999999999;

$autoOverzicht = new autoOverzicht();
$autoOverzicht->voegAutoToe(new autoFilter("Dun", "Audi", "R8",  30000, "https://www.autospectrum.nl/wp-content/uploads/2019/02/audi-r8-v10-decennium-rechts-voor.jpg"));
?>

<html lang="en">
<head>
    <title>MR Wheely</title>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="wrapper">
<img class="header" src="img/wheelyHeader.jpg" alt="header-img">
    <form action="index.php" method="post">
        <label>
            Banddikte: <br>
            <select id="banddikte">
                <option value="dik">Dik</option>
                <option value="middel">Middel</option>
                <option value="dun">Dun</option>
            </select>
        </label>
        <label>
            Merk: <br>
            <select id="merk">
                <option value="Audi">Audi</option>
                <option value='Fiat'>Fiat</option>
            </select>
        </label>
        <label>
            Minimale prijs: <br>
            <input type="number" id="min-prijs">
        </label>
        <label>
            Maximale prijs: <br>
            <input type="number" id="max-prijs">
        </label>
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>

    <div class="auto-columns">
        <div class="column">
            <?php
                foreach ($autoOverzicht->getGefilterdeLijst($banddikte, $merk, $minprijs, $maxprijs) as $auto) {
                    echo $auto->getMerk() . " - " . $auto->getPrijs() . "<br />";
                    echo '<img width=512px height=512px src="' . $auto->getUrl() . '" alt=""/> <br/>';
                }
            ?>
        </div>
    </div>
</div>
</body>
</html>