<?

include_once('broodje.php');
include_once('broodjesOverzicht.php');


$inputs = array(
    array(
        $inputnaam = isset($_GET['naam-broodje']) ? $_GET['naam-broodje'] : '',
        $inputmeel = isset($_GET['meel-broodje']) ? $_GET['meel-broodje'] : '',
        $inputvorm = isset($_GET['vorm-broodje']) ? $_GET['vorm-broodje'] : '',
        $inputgewicht = isset($_GET['gewicht-broodje']) ? $_GET['gewicht-broodje'] : ''
    )
);

//$_GET => toevoegen (1 boordje)
//Cookies
//Cookies => loopen (foreach)
session_start();
$broodjesOverzicht = new broodjesOverzicht();
if (empty($_SESSION['broodjeslijst'])) {
    $broodjesOverzicht->voegbroodjetoe(new broodje('1', 'wit', 'driehoek', 80));
    $broodjesOverzicht->voegbroodjetoe(new broodje('2', 'zwart', 'driehoek', 100));
    $broodjesOverzicht->voegbroodjetoe(new broodje('3', 'bruin', 'rechthoek', 120));
    $broodjesOverzicht->voegbroodjetoe(new broodje('4', 'tarwe', 'rechthoek', 140));

    $_SESSION['broodjeslijst'] = $broodjesOverzicht;
}

foreach ($inputs as $array) {
    $broodjesOverzicht->voegbroodjetoe(new broodje($inputnaam, $inputmeel, $inputvorm, $inputgewicht));
}
print_r($_SESSION['broodjeslijst']);
print_r($broodjesOverzicht);

function JSC($input)
{
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

JSC($_GET);
?>

<html lang="en">
<head>
    <title>Broodjes overzicht</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="broodjes_toevoegen.php">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<header>
    <h1>Bakkerij Vlecht Beheer</h1>
</header>
<div id="wrapper">
    <ul>
        <li>
            <a href="index.php">Broodjes overzicht</a>
        </li>
        <li>
            <a href="broodjes_toevoegen.php">Broodjes toevoegen</a>
        </li>
    </ul>
    <table id="table">
        <?php

        foreach ($_SESSION['broodjeslijst']->getbroodjes() as $broodje) {
            if ($broodje->getnaam() !== '' && $broodje->getmeel() !== '' && $broodje->getvorm() !== '' && $broodje->getgewicht() !== '') {
            echo '<tr>
<td>' . $broodje->getnaam() . '</td>
<td>' . $broodje->getmeel() . '</td>
<td>' . $broodje->getvorm() . '</td>
<td>' . $broodje->getgewicht() . '</td>
<td> <a href="details.php?gekozenbroodje=' . $broodje->getnaam() . '">details</a> </td>
</tr> <br>';
            }
        }
        ?>
    </table>
</div>
</body>
</html>