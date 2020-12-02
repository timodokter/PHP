<html lang="en">
<head>
    <title>opdr 3.6</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$AantalLedenDeSpartelKuikens = 25;
$AantalLedenDeWaterBuffels =32;
$AantalLedenPlonsmderin = 11;
$AantalLedenBommetje = 23;
$clubs = array("AantalLedenDeSpartelKuikens"=>$AantalLedenDeSpartelKuikens,
    "AantalLedenDeWaterBuffels"=>$AantalLedenDeWaterBuffels, "AantalLedenPlonsmderin"=>$AantalLedenPlonsmderin, "AantalLedenBommetje"=>$AantalLedenBommetje);
?>
<table border="1px black solid">
    <tr>
        <th>
            Zwemclub
        </th>
        <th>
            Aantal leden
        </th>
    </tr>
    <tr>
        <td>
            De spartelkuikens
        </td>
        <td>
            25
        </td>
    </tr>
    <tr>
        <td>
            De Waterbuffels
        </td>
        <td>
            32
        </td>
    </tr>
    <tr>
        <td>
            Plonsmderin
        </td>
        <td>
            11
        </td>
    </tr>
    <tr>
        <td>
            Bommetje
        </td>
        <td>
            23
        </td>
    </tr>
</table>
<?php
foreach ($clubs as $x => $val) {
        for ($x = 0; $x <= $val; $x++) {
            echo "<img alt='zwemmer' src=../img/zwemmer.png>";
            $x = $x + 5;
        }
        echo "<br>";
}
?>
</body>
</html>