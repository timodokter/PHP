<?php
class Radioprogramma {
    private $ProgrammaNaam;
    private $Omschrijving;
    private $liedjes;

    public function setProgramma() {
        $this->ProgrammaNaam ='<h1>The Search</h1>';
        $this->Omschrijving = '<h3>Dit is het nieuwste album van nf</h3>';
        echo $this->ProgrammaNaam . '<br>';
        echo $this->Omschrijving . '<br>';
    }

    public function setLiedjes ($ingevuldeLiedjes){
        //korte if (werkt alleen als je 1 statement na de if en geen else)
        if (is_array($ingevuldeLiedjes)) $this->liedjes = $ingevuldeLiedjes;
    }

    public function getLiedjes() {
       foreach ($this->liedjes as $value){
           echo $value . "<br>";
       }
    }

}
$ProgrammaInfo = new Radioprogramma();
$ProgrammaInfo->setProgramma();
$ProgrammaInfo->setLiedjes(array("The Search", "Leave Me Alone", 'Change', 'My Stress', 'Nate'));
$ProgrammaInfo->getLiedjes();