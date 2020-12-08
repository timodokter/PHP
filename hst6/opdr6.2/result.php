<?php

$user = 'root';
$pass = 'root';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=inloggegevens;port=8889', $user,
        $pass);
    $wachtwoord = $dbh->query('SELECT wachtwoord from gegevens');
    $emails = $dbh->query('SELECT email from gegevens');
    foreach ($emails as $email => $wachtwoord) {
        if ($_POST["email"] == $email && $_POST["password"] == $wachtwoord) {
            echo "Welkom!";
        } else if ($_POST["email"] !== $email && $_POST["password"] !==
            $wachtwoord) {
            echo "uw ingevoerde inloggevens kloppen niet" . "<br>";
            echo "<a href='index.html'>terug naar het inlog scherm</a> <br>";
            break;
        }
    }
//    foreach($dbh->query('SELECT * from gegevens') as $row) {
//        print_r($row);
//    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
