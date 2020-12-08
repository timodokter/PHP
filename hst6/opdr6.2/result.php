<?php

$user = 'root';
$pass = 'root';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=inloggegevens;port=8889', $user,
        $pass);
    $wachtwoorden = $dbh->query('SELECT wachtwoord from gegevens');
    $emails = $dbh->query('SELECT email from gegevens');
    $array = array($emails => $wachtwoorden);
    foreach ($array as $email => $wachtwoord) {
        if ($_POST['email'] == $email && $_POST['password'] == $wachtwoord) {
            echo 'welkom';
        } else if ($_POST['email'] !== $email && $_POST['password'] !==
            $wachtwoord){
            echo 'opbokken';
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