<?php

$gegevenEmail = $_POST['email'];
$gegevenWachtwoord = $_POST['password'];

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
        echo "WELKOM!";
        break;
    } else if ($row['email'] !== $gegevenEmail OR $row['wachtwoord'] !==
        $gegevenWachtwoord) {
        echo 'uw ingevulde gegevens kloppen niet <br>';
        echo '<a href="index.html">klik hier om terug te gaan naar het formulier</a> <br>';
    }
}

