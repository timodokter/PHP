<?php

class broodje {
    private string $naam;
    private string $meel;
    private string $vorm;
    private string $gewicht;

    public function __construct(string $naam, string $meel, string $vorm, string $gewicht) {
        $this->naam = $naam;
        $this->meel = $meel;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    public function getnaam(): string{
        return $this->naam;
    }

    public function setnaam($nieuweNaam) {
        $this->naam = $nieuweNaam;
    }

    public function getmeel(): string {
        return $this->meel;
    }

    public function setmeel($nieuwMeel) {
        $this->meel = $nieuwMeel;
    }

    public function getvorm(): string {
        return $this->vorm;
    }

    public function setvorm($nieuweVorm) {
        $this->vorm = $nieuweVorm;
    }

    public function getgewicht(): string {
        return $this->gewicht;
    }

    public function setgewicht($nieuwGewicht) {
        $this->gewicht = $nieuwGewicht;
    }
}