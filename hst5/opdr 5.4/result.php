<?php
$aanmeldingen = array("piet@worldonline.nl" => "doetje123", "klaas@carpets.nl" => "snoepje777", "truushendriks@wegweg.nl" => "arkiearkie201");
foreach ($aanmeldingen as $email => $wachtwoord) {
    if ($_POST["email"] == $email && $_POST["password"] == $wachtwoord) {
        echo "Welkom!";
    } else if ($_POST["email"] !== $email && $_POST["password"] !==
        $wachtwoord) {
        echo "uw ingevoerde inloggevens kloppen niet" . "<br>";
        echo "<a href='index.html'>terug naar het inlog scherm</a>";
    }
}
?>
