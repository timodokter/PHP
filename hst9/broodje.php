<?php

class broodje {
    private string $meel;
    private string $vorm;
    private string $gewicht;

    public function __construct(string $meel, string $vorm, string $gewicht) {
        $this->meel = $meel;
        $this->vorm = $vorm;
        $this->gewicht = $gewicht;
    }

    public function getmeel(): string {
        return $this->meel;
    }

    public function getvorm(): string {
        return $this->vorm;
    }

    public function getgewicht(): string {
        return $this->gewicht;
    }
}

class broodjes_Overzicht {
    public array $broodjes;

    public function __construct() {
        $this->broodjes = [];
    }

    public function voebroodjetoe($broodje) {
        $this->broodjes[] = $broodje;
    }

    public function getbroodjeslisjt(): array {
        return $this->broodjes;
    }
}