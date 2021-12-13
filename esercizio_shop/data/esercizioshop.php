<?php
require_once __DIR__ ."/prodotti.php";
require_once "../class_data/UserStandard.php";
require_once "../class_data/ProdottoBase.php";
require_once "../class_data/UserAdvance.php";
require_once "../class_data/ProductBeauty.php";
require_once __DIR__ ."/utenti.php";


$prodottoBase = new ProdottoBase("beauty","50","ros");
$userStandard = new UserStandard("gino","pino","hihi@ii.it");

$userAdvance = new UserAdvance("mario","tony","msmfsomfo","10","5");
//$ProductBeauty = new ProductBeauty($_data);



$listaUtenti = [];

$listaProdotti = [];

foreach ($utenti as $singoloUtente){
  //  $utenti[] = 

    if ($singoloUtente["accountType"] === "Pro"){
    $listaUtenti[] = new UserAdvance ($singoloUtente["name"], $singoloUtente["lastname"], $singoloUtente["mail"], $singoloUtente["level"], $singoloUtente["discount"]) ;
    }else{
    $listaUtenti[] = new UserStandard($singoloUtente["name"], $singoloUtente["lastname"], $singoloUtente["mail"]);   
    }
}

foreach ($prodotti as $singoloProdotto){
    if ($singoloProdotto["tipologia"] === "beauty"){

        $listaProdotti[] = new ProductBeauty($singoloProdotto);

    }else{
        $listaProdotti[] = new ProdottoBase($singoloProdotto["tipologia"],$singoloProdotto["prezzo"],$singoloProdotto["name"]);
    }
}




//var_dump($listaUtenti[1]);
//var_dump($listaProdotti[0]);

//var_dump($listaUtenti[4]);
var_dump($listaUtenti);
var_dump($listaProdotti);

//var_dump($ProductBeauty);
//var_dump($userAdvance) ;
//var_dump($userStandard);
//var_dump($prodottoBase);
