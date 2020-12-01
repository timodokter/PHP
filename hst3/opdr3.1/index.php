<?php
for ($x = 1; $x <= 10; $x++) {
    print "<img src='../img/game1.jpg'>";
}

for ($x = 0; $x <= 3; $x++) {
    echo "<br>";
}

$games = array("game1.jpg", "game2.jpg", "game3.jpg", "game4.jpg", "game5.jpg", "game6.jpg", "game7.jpg", "game8.jpg", "game9.jpg", "game10.jpg",);

foreach ($games as $game) {
    echo "<img src=../img/".$game.">";
}