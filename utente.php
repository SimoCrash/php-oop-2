<?php

class Utente 
{
    private $registrato;
    private $nonRegistrato;
    public $sconto = 0;

    public function setSconto()
    {
        if($this->registrato == true){
            $this->sconto = 20;
        }
    }

    public function getSconto()
    {
        return $this;
    }

    public function __construct($registrato)
    {
        $this->registrato = $registrato;
    }
}

$user = new Utente(true);
var_dump($user);

?>