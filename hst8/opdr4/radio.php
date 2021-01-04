<?php
class Radioprogramma {
    private $ProgrammaNaam;
    private $Omschrijving;
    private $Liedjes = array();

    public function getProgramma($IngevuldeProgrammaNaam,
                                 $IngevuldeOmschrijving) {
        $this->ProgrammaNaam = $IngevuldeProgrammaNaam;
        $this->Omschrijving = $IngevuldeOmschrijving;
    }

    public function getLiedjes($IngevuldeLiedjes = array()) {
        $this->Liedjes = $IngevuldeLiedjes;
        echo $this->Liedjes;
    }

}
$ProgrammaInfo = new Radioprogramma();
$ProgrammaInfo->getLiedjes();