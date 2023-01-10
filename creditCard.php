<?php

class creditCard 
{
    public $numero;
    public $cvc;
    public $scadenza;

    public function checkValidity(){
        if(is_numeric($numero) && strlen($numero) == 16){
            echo "il numero è corretto";
        } else {
            echo "Verificare la correttezza dei dati";
        }
    }

    public function checkCvc(){
        if(is_numeric($cvc) && strlen($cvc) == 3){
            echo "il numero è corretto";
        } else {
            echo "Verificare la correttezza dei dati";
        }
    }

    public function checkScadenza(){
        if(checkdate($scadenza) && date('m/Y') < $scadenza){
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

$cartaDiCredito = new creditCard (0058912334216196, 295, '01/25');
echo $cartaDiCredito;


?>