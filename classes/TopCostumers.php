<?php

require_once __DIR__ . "/Costumers.php";

class TopCostumers extends Costumers {
    
    public $sconto;
    
    public function __construct($_nome,$_cognome,$_dataDiNascita,$_indirizzo,$_sconto)
    {
        parent :: __construct($_nome,$_cognome,$_dataDiNascita,$_indirizzo);
        $this->sconto= $_sconto;
    }
    

    
}