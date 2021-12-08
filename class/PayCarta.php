<?php
require_once __DIR__ ."/Pagamento.php";


class PayCarta {
   public $CartaNumero;
   public $CartaScadenza;
   public $CartaCodice;
   


   public  function setCartaNumero($newCartaNumero){
       $this ->CartaNumero = $newCartaNumero;
   }


   public  function setCartaScadenza($newCartaScadenza){
    $this ->CartaScadenza = $newCartaScadenza;
  }

  public  function setCartaCodice($newCartaCodice){
    $this ->CartaCodice = $newCartaCodice;
    }


    public function getFullInfo(){
        return $this ->CartaNumero . " ". $this -> CartaScadenza . " " . $this -> CartaCodice . "<br>";
    }
}

