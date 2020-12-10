<?php

$gegevenEmail = $_POST['email'];
$gegevenWachtwoord = $_POST['password'];
$ingelogt = false;

$user = 'root';
$pass = 'root';

// Connectie maken
try {
    $dbh = new PDO('mysql:host=localhost;dbname=inloggegevens;port=8889', $user,
        $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

$rows = $dbh->query('SELECT email, wachtwoord from gegevens');

foreach ($rows as $row) {
    if ($row['email'] == $gegevenEmail && $row['wachtwoord'] ==
        $gegevenWachtwoord) {
        echo 'WELKOM!';
        $ingelogt = true;
    }
}

if ($ingelogt == false) {
        echo 'uw ingevulde gegevens kloppen niet <br>';
        echo '<a href="index.html">klik hier om terug te gaan naar het formulier</a> <br>';
    }