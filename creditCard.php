<?php

class creditCard 
{
    private int $id;
    public int $number;
    public int $cvc;
    public $expiryMonth;
    public $expiryYear;

    public function __construct($number, $cvc, $expiryMonth, $expiryYear)
    {
        $this->number = $number;
        $this->cvc = $cvc;
        $this->expiryMonth = $expiryMonth;
        $this->expiryYear = $expiryYear;
    }

    public function checkValidity()
    {
        if((int) $this->number && strlen($this->number) == 16){
            echo "il numero è corretto";
        } else {
            echo "Verificare la correttezza dei dati";
        }
    }

    public function checkCvc()
    {
        if((int) $this->cvc && strlen($this->cvc) == 3){
            echo "il numero è corretto";
        } else {
            echo "Verificare la correttezza dei dati";
        }
    }

    public function isExpired(): bool
    {
        if((int) date('y') < $this->expiryYear) {
            return false;
        } else if ((int) date('Y') == $this->expiryYear && (int) date('m') < $this->expiryMonth) {
            return false;
        }
        return true;
    }

    public function get($id)
    {
        //id carta dal database
    }

    public function pay($amount)
    {
        if($this->isExpired()){
            throw new Exception("la tua carta è scaduta");
        } else {
            echo "carta valida";
            return true;
        }
    }
}

?>







<!-- {
    private $numero;
    private $cvc;
    private $scadenza;

    public function checkValidity(){
        if((int) $this->numero && strlen($this->numero) == 16){
            echo "il numero è corretto";
        } else {
            echo "Verificare la correttezza dei dati";
        }
    }

    public function checkCvc(){
        if(is_numeric($this->cvc) && strlen($this->cvc) == 3){
            echo "il numero è corretto";
        } else {
            echo "Verificare la correttezza dei dati";
        }
    }

    public function checkScadenza(){
        if(date('m/Y') < $this->scadenza){
            echo "Ok i dati sono completi";
        } else {
            echo "Verificare la correttezza dei dati";
        }
    }

    public function __construct($numero, $cvc, $scadenza)
    {
        $this->numero = $numero;
        $this->cvc = $cvc;
        $this->scadenza = $scadenza;
    }
} -->