<?php



class Prodotti {
   public $ProductName;
   public $ProductPrice;

   public  function __construct($name, $price){
       $this ->ProductName = $name;
       $this -> ProductPrice = $price;
   }
}

