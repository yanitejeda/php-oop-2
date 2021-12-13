<?php
require_once "./listaUtenti.php";
require_once "./listaProdotti.php";
require_once "./class/UserBase.php";
require_once "./class/UserPro.php";
require_once "./class/UserProCart.php";



$customers = [];
$products=[];


foreach ($user as $utenti){
    if($utenti["accountType"] === "pro"){
        $customers[] = new UserPro ($utenti["name"], $utenti["lastName"], $utenti["accountType"]);
        
    } else {
        $customers[] = new UserBase ($utenti["name"], $utenti["lastName"], $utenti["accountType"]);

    }
}

foreach ($products as $prodotti){
  
    $prodotti[] = new Product ($prodotti["tipologia"], $prodotti["name"], $prodotti["prezzo"]);
        
  
}

$customers[0]->userProCart->addToUserProCart($prodotti[0]);
var_dump($customers);