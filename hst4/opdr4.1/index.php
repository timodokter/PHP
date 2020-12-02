<html lang="en">
<head>
    <title>opdr 4.1</title>
</head>
<body>
<?php
function celsiusnaarfahrenheit() {
    $celcius = 23;
    $fahrenheit = $celcius * 1.8 + 32;
    return $fahrenheit;
}
echo celsiusnaarfahrenheit();
?>
</body>
</html>