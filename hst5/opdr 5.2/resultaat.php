<html lang="en">
<head>
    <title>resultaat opdr 5.2</title>
</head>
<body>
<?php
if ($_POST["inlognaam"] == "") {
    echo "je hebt je naam niet opgegeven"."<br>";
    echo "<a href='index.html'>terug naar het formulier</a>"."<br>";
} else {
    echo "Naam: " . $_POST["inlognaam"]."<br>";
}

if ($_POST["wachtwoord"] == "") {
    echo "je hebt nog geen wachtwoord opgegeven" . "<br>";
    echo "<a href='index.html'>terug naar het formulier</a>" . "<br>";
}

if ($_POST["email"] == "") {
    echo "je hebt nog geen email adres ingevuld"."<br>";
    echo "<a href='index.html'>terug naar het formulier</a>"."<br>";
} else {
    echo "Email: " . $_POST["email"]."<br>";
}

 if ($_POST["adres"] == "") {
     echo "je hebt nog geen adres ingevuld"."<br>";
     echo "<a href='index.html'>terug naar het formulier"."<br>";
 } else {
     echo "Adres: " . $_POST["adres"]."<br>";
 }
?>
</body>
</html>