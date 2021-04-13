<?php

class broodjesOverzicht {
    public array $broodjes = array();

    public function getbroodjes(): array {
        return $this->broodjes;
    }

    public function voegbroodjetoe($broodje) {
        $this->broodjes[] = $broodje;
    }

    public function getbroodjeslijst(): array {
        return $this->broodjes;
    }

    public function givebroodje($naam) {

        foreach ($this->broodjes as $broodje) {
            if ($naam === $broodje->getnaam()) {
                $gevondenbroodje = $broodje;
            }
        }
        return $gevondenbroodje;
    }
}