<?php

$user = "root";
$pass = "root";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=schoolphp;port=8889', $user,
        $pass);
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }

    $dbh = null;
} catch (PDOException $e) {
    print "ERROR!: " . $e->getMessage() . "<br/>";
    die();
}

