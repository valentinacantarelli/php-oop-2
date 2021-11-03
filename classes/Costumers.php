<?php 

class Costumers {
    public $nome;
    public $cognome;
    public $dataDiNascita;
    public $indirizzo;
    
    public function __construct($_nome,$_cognome,$_dataDiNascita,$_indirizzo)
    {
        $this->nome= $_nome;
        $this->cognome= $_cognome;
        $this->dataDiNascita= $_dataDiNascita;
        $this->indirizzo= $_indirizzo;
    }

}