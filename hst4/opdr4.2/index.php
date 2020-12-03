<html lang="en">
<head>
    <title></title>
</head>
<body>
<?php
echo deelbaardoor3(6);
    function deelbaardoor3($input) {
        if ($input % 3 == 0) {
            $deelbaar = true;
        } else {
            $deelbaar = false;
            echo 0;
        }
        return $deelbaar;
    }
?>
</body>
</html>