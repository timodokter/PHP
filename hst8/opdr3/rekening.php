<?php
class  Klant {
    private $bankrekening;

    public function stortgeld($hoeveel) {
        if ($hoeveel > 0) {
            $this->bankrekening += $hoeveel;
        }
    }
}

$piet = new Klant();
$piet->stortgeld(20);
?>