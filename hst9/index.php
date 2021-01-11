<?

include_once('broodje.php');

$meel_broodje = isset($_GET['meel-broodje']) ? $_GET['meel-broodje'] : "";
$vorm_broodje = isset($_GET['vorm-broodje']) ? $_GET['vorm-broodje'] : "";
$gewicht_broodje = isset($_GET['gewicht-broodje']) ? $_GET['gewicht-broodje'] : "";

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
</div>
</body>
</html>