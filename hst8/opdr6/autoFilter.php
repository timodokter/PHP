<?php

class autoFilter {
    private $banddikte;
    private $merk;
    private $type;
    private $prijs;
    private $url;

    public function __construct(string $banddikte, string $merk, string $type, int $prijs, string $url) {
        $this->banddikte = $banddikte;
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->url = $url;
    }

    public function getBanddikte() {
        return $this->merk;
    }

    public function getMerk() {
        return $this->merk;
    }

    public function getType() {
        return $this->type;
    }

    public function getPrijs() {
        return $this->prijs;
    }

    public function getUrl() {
        return $this->url;
    }
}

class autoOverzicht {
    public $autos;

    public function __construct() {
        $this->autos = [];
    }

    public function getGefilterdeLijst($banddikte, $merk, $minprijs, $maxprijs) {
        $gefilterdeLijst = [];

        foreach ($this->autos as $auto) {
            if ($auto->getBanddikte() === $banddikte && $auto->getMerk() === $merk && $auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs) {
                $gefilterdeLijst[] = $auto;
            } else if ($auto->getBanddikte() === $banddikte && $merk === "" && $auto->getPrijs() >= $minprijs && $auto->getPrijs() <= $maxprijs) {
                $gefilterdeLijst[] = $auto;
            }
        }

        return $gefilterdeLijst;
    }

    public function voegAutoToe($auto) {
        $this->autos = $auto;
    }

    public function getAutoLijst() {
        return $this->autos;
    }
}