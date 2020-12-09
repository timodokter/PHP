<head>
    <title></title>
    <style>
        html {
            font-family: "Arial", sans-serif;
        }
    </style>
</head>
<?php

//inlog gegevens voor de db
$pass = 'root';
$user = 'root';

//de ingevulde gegevens
$gegevenemail = $_POST['email'];
$gegevenwachtwoord = $_POST['password'];

//connectie maken met db
try {
    $dbh = new PDO('mysql:host=localhost;dbname=inloggegevens;port=8889',
        $user, $pass);
} catch (PDOException $e) {
    echo 'ERROR!: ' . $e->getMessage() . '<br>';
    die();
}

//het inlogsysteem
$rows = $dbh->query("SELECT * from gegevens");
foreach ($rows as $row) {
    if ($row['email'] == $gegevenemail && $row['wachtwoord'] ==
    $gegevenwachtwoord) {
        if ($row['admin'] == 'true') {
            echo 'welkom terug admin';
        } else if ($row['admin'] == 'false') {
            echo "welkom";
        }
        break;
    } else if ($row['email'] !== $gegevenemail && $row['wachtwoord'] !==
        $gegevenwachtwoord) {
        echo 'uw ingevulde wachtwoord of email klopt niet probeer het opnieuw <br>';
        echo '<a href="index.html">terug naar het inlog formuleir</a>';
        break;
    }
}