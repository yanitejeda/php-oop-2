<?php


class ProdottoBase{
    protected $tipologia;
    protected $prezzo;
    protected $name;

  

    function __construct($_tipologia, $_prezzo, $_name){
        $this->setTipologia = ($_tipologia);
        $this->setPrezzo = ($_prezzo);
        $this->setName = ($_name);

    }

    public function setTipologia(){
        $this->tipologia;
    }
    public function setPrezzo(){
        $this->prezzo;
    }public function setName(){
        $this->name;
    }


    public function getTipologia($value){
     return   $this-> $value;
    }

    public function getPrezzo($value){
        return   $this-> $value;
    }
    public function getName($value){
        return   $this-> $value;
    }
}