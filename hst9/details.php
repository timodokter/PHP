<?php
include_once ('broodjesOverzicht.php');
include_once ('broodje.php');

session_start();

print_r($_SESSION['broodjeslijst']->givebroodje($_GET['gekozenbroodje']))
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