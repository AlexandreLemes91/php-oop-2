<?php 

require_once __DIR__ . '/../item.php';
require_once __DIR__ . '/../../trait/size.php';

class Mobile extends Item{
    public $colore;

    function __construct($id, $nome, $categoria, $brand, $prezzo, $colore){
        parent::__construct($id, $nome, $categoria, $brand, $prezzo);

        $this->colore=$colore;
    }
    
    use Size;
}