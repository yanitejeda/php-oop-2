<?php



class Utenti {
   public $UtentiName;
   public $UtentiLastName;
   public $UtentiEmail;
   public $pay = [];


   public  function __construct($Utenti_Name, $Utenti_LastName ,$Utenti_Email){
       $this ->UtentiName = $Utenti_Name;
       $this -> UtentiLastName = $Utenti_LastName;
       $this -> UtentiEmail = $Utenti_Email;
   }


   public function addPagamento(...$PayMetodo){
       array_push($this ->pay , $PayMetodo);
   }
}

