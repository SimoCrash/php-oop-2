<?php

include __DIR__ . "/Utente.php";
include __DIR__ . "/RegisterdUser.php";
include __DIR__ . "/GuestUser.php";
include __DIR__ . "/CreditCard.php";
include __DIR__ . "/Negozio.php";

$carta = new creditCard ('0058912334216196', 295, 1, 25);
var_dump($carta);

// $shop = new Negozio('croccantini','peluche', 'casetta', 'cane');
// var_dump($shop) ;

// $user = new Utente(true);
// var_dump($user);
?>