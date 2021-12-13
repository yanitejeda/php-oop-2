<?php

require_once __DIR__ . "./Spedizione.php";

class ProductBeauty extends ProdottoBase{
   
    public $color;
    use Spedizione;

  /*   function __construct($_color, $_tipologia, $_prezzo, $_name){
        parent::__construct($_tipologia,$_prezzo,$_name);


        $this->setColor($_color);
        
    }
 */

    function __construct(Array $_data){
        $_name =isset( $_data["name"]) ?  $_data["name"]  : " ";
        $_prezzo =  isset($_data["prezzo"]) ? $_data["prezzo"] : "";
        $_tipologia=isset( $_data["tipologia"]) ?  $_data["tipologia"] : "";
        $_color = isset($_data["colore"]) ? $_data["colore"] : "";

        parent::__construct($_tipologia,$_prezzo,$_name);
        $this->setColor($_color);

    }

    public function setColor($_color){
        $this->color= $_color;
    }

    public function getColor(){
        return $this->color;
    }

}