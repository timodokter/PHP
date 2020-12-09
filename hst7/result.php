<?php

$pass = 'root';
$user = 'root';

//connectie maken met db
try {
    $dbh = new PDO('mysql:host=localhost;dbname=inloggegevens;port=8889',
        $user, $pass);
} catch (PDOException $e) {
    echo 'ERROR!: ' . $e->getMessage() . '<br/>';
    die();
}

$rows = $dbh->query("SELECT * from gegevens");

$gegevenemail = $_POST['email'];
$gegevenwachtwoord = $_POST['wachtwoord'];

foreach ($rows as $row) {
    if ($row['email'] == $gegevenemail && $row['wachtwoord'] ==
    $gegevenwachtwoord) {
        echo 'hoi';
        break;
    }
}