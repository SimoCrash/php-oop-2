<?php

class Negozio
{
    public $cibo;
    public $giochi;
    public $cucce;
    public $animali;

    public function __construct($cibo, $giochi, $cucce, $animali)
    {
        $this->cibo = $cibo;
        $this->giochi = $giochi;
        $this->cucce = $cucce;
        $this->animali = $animali;
    }
}

$shop = new Negozio('croccantini','peluche', 'casetta', 'cane');
var_dump($shop) ;


?>