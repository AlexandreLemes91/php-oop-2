<?php

trait Size{
    public $altezza;
    public $larghezza;
    public $profondita;   

    public function set_size($a, $l, $p){
        if( is_numeric($a) && is_numeric($l) && is_numeric($p)){
            $this-> altezza = $a;   
            $this-> larghezza = $l;
            $this-> profondita = $p;
        }else{
            throw new Exception('valori per le misure non validi!');
        }
    }

    public function get_size(){
        return "$this->larghezza'x'$this->altezza'x'$this->profondita";
    }
}