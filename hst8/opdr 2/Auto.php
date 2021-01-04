<?php
class Auto
{
    private $aantalwielen;

    public function setAantalWielen() {
        $this->aantalwielen = 4;
        }
}

$auto = new Auto();

$auto->setAantalWielen = 4 ;

echo $auto->setAantalWielen;
?>