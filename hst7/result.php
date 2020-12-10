<head>
    <title>home page</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php

//inlog gegevens voor de db
$pass = 'root';
$user = 'root';

//de ingevulde gegevens
$gegevenEmail = $_POST['email'];
$gegevenWachtwoord = $_POST['password'];

$ingelogt = false;

//connectie maken met db
try {
    $dbh = new PDO('mysql:host=localhost;dbname=inloggegevensvoorhst7;port=8889',
        $user, $pass);
} catch (PDOException $e) {
    echo 'ERROR!: ' . $e->getMessage() . '<br>';
    die();
}

//het inlogsysteem
$rows = $dbh->query("SELECT * from gegevens");
foreach ($rows as $row) {
    if ($row['email'] == $gegevenEmail && $row['wachtwoord'] ==
        $gegevenWachtwoord) {
        $ingelogt = true;
        echo '<h2>De home page</h2>';
        if ($row['admin'] == 'true') {
            echo 'welkom admin ' . $row['name'] . '<br>';
            echo '<a href="admin.html">de admin pagina</a> <br>';
        } elseif ($row['admin'] == 'false') {
            echo 'welkom gebruiker ' . $row['name'] . '<br>';
        }
    }
}
if ($ingelogt == false) {
    echo 'uw ingevulde gegevens kloppen niet <br>';
    echo '<a href="index.html">klik hier om terug te gaan naar het formulier</a> <br>';
} else {
    echo '<a href="index.html">uitloggen</a> <br>';
}