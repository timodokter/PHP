<html lang="en">
<head>
    <title></title>
    <style>
        html {
            font-family: "Arial", sans-serif;
        }
    </style>
</head>
<body>
<?php
echo omdraaier('hoi');
    function omdraaier($input) {
        if (is_string($input) == 1) {
            return strrev($input);
        } else {
            echo 'Uw input is geen tekst!';
        }
    }
?>
</body>
</html>