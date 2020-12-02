<html lang="en">
<head>
    <title>opdr 3.4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
for ($x = 1; $x <= 10; $x++) {
    if ($x % 2 == 0) {
        $class = "class='red'";
    } else {
        $class = "class='green'";
    }
    echo "<img " . $class . "src =../img/game" . $x . ".jpg>";
}
?>
</body>
</html>