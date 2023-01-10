<?php

class Utente 
{
    private $registrato;
    private $nonRegistrato;
    public $sconto = 0;


    public function __construct($registrato)
    {
        $this->registrato = $registrato;
        if($this->registrato){
            $this->sconto = 20;
        }
    }
}



?>