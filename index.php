<?php
include "./class/Prodotti.php";
include "./class/Utenti.php";
include "./class/PayCarta.php";
include "./class/PayBancomat.php";
//include "./class/Pagamento.php"; 







$listaProdotti = [

    new Prodotti ('pane', 20),
    new Prodotti ('latte', 5),
    new Prodotti ('vino', 4),

];

//carta
$carta = new PayCarta('carta di credito');
$carta -> CartaNumero  = '1551515157' ;
$carta -> CartaScadenza  = '10-23-25' ;
$carta -> CartaCodice  = '20202020' ;
echo $carta -> getFullInfo();

//bancomat
$Banco = new PayBancomat('carta ');
$Banco -> CartaNumero  = '0000000' ;
$Banco -> CartaScadenza  = '10/00/25 ';
$Banco -> CartaCodice  = '00000000000000' ;
echo $Banco -> getFullInfo();

/* $pagamento = [
    $carta -> getcarta
]; */



var_dump($listaProdotti);


$utente1 = new Utenti ('pino','gino','pino.gino@gmail.com');


var_dump($utente1);