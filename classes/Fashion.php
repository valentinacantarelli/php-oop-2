<?php

require_once __DIR__ ."/Products.php";

class Fashion extends Products{
    public $taglia;
    public $colore;

    public function __construct($_nome,$_prezzo,$_tipologia,$_taglia,$_colore)
    {
        parent :: __construct($_nome,$_prezzo,$_tipologia);
        $this->taglia= $_taglia;
        $this->colore= $_colore;
    }
}