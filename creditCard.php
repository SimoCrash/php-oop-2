<?php

class creditCard 
{
    private $numero;
    private $cvc;
    private $scadenza;

    public function checkValidity(){
        if(is_numeric($this->numero) && strlen($this->numero) == 16){
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
}




?>