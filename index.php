<?php

include __DIR__ . "/creditCard.php";
include __DIR__ . "/utente.php";
include __DIR__ . "/negozioAnimali.php";

$carta = new creditCard (intval('0058912334216196'), 295, '01/25');
var_dump($carta);

$shop = new Negozio('croccantini','peluche', 'casetta', 'cane');
var_dump($shop) ;
?>