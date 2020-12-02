<html lang="en">
<head>
    <title>opdr3.5</title>
</head>
<body>
<?php
$leeftijd = 12;
$prijs = 10.00;
if ($leeftijd > 65 OR $leeftijd <= 12 And $leeftijd > 3) {
    $prijs = $prijs / 2;
    echo "U bent " . $leeftijd . " jaar oud en daarom betaalt u €" . $prijs;
} else if ($leeftijd <= 2) {
    $prijs = $prijs == 0;
    echo "U bent " . $leeftijd . " jaar oud en daarom bent u gratis!";
} else {
    echo "U bent " . $leeftijd . " jaar oud en daarom betaalt u €" . $prijs;
}
?>
</body>
</html>