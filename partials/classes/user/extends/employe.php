<?php
require_once __DIR__ . '/../user.php';

class Employe extends User{
    public $livello;
    public $inizio_contratto;
    public $fine_contratto;

    function __construct($name, $surname, $email, $eta, $livello, $inizio_contratto, $fine_contratto = 'indeterminato'){
        parent::__construct($name, $surname, $email, $eta);

        $this->livello = $livello;
        $this->inizio_contratto = $inizio_contratto;
        $this->fine_contratto = $fine_contratto;

    }

}