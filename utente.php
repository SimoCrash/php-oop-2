<?php

class Utente
{
    protected string $name;
    protected string $address;
    protected creditCard $creditCard;
    protected int $discount = 0;
    protected array $product = [];

    public function __construct($name, $address, $creditCard)
    {
        $this->name = $name;
        $this->address = $address;
        $this->creditCard = $creditCard;
    }
}

?>









<!--
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
-->