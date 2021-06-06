<?php

class User{
    protected $name;
    protected $surname;
    protected $email;
    protected $eta;
    protected $premium;

    function __construct($name, $surname, $email, $eta, $premium = false){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->eta = $eta;
        $this->premium = $premium;
    }

}