<?php

class Product{

    protected $name;
    protected $price;

     function __construct($_name, $_price){


        $this->seName = ($_name);
        $this->sePrice =( $_price);

    }

    public function setName($value){
        $this ->name = $value;
    }

    public function setPrice($value){
        $this ->price = $value;
    }

}