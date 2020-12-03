<html lang="en">
<head>
    <title></title>
</head>
<body>
<?php
echo deelbaardoor3(5);
    function deelbaardoor3($input) {
        if ($input % 3 == 0) {
            $deelbaar = true;
        } else {
            $deelbaar = false;
        }
        return $deelbaar;
    }
?>
</body>
</html>