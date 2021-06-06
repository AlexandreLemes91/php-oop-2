<?php

class Item{
    public $id;
    public $nome;
    public $categoria;
    public $brand;
    public $prezzo;

    function __construct($id, $nome, $categoria, $brand = '', $prezzo){
        $this->id = $id;
        $this->nome = $nome;
        $this->categoria = $categoria;
        $this->brand = $brand;
        $this->prezzo = $prezzo;
    }

}