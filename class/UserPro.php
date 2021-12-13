<?php

require_once  __DIR__ ."/UserBase.php";
//require_once __DIR__ ."UserProCart.php";

class UserPro extends UserBase{
    protected $userProNumber;
    protected $userProStreet;

    public $userProCart;



    function  __costructor($_userName, $_userLastName, $_userEmail){
        parent::__costructor($_userName, $_userLastName, $_userEmail);

        $this -> setUserProNumber();
        $this -> setUserProStreet();
        
        $this -> userProCart = new userProCart();

    }

    protected function setUserProNumber(){

        $this->userProNumber = rand(0,5);

    }


    protected function setUserProStreet(){

        $this->userProStreet = ('vdigisngins');

    }

/* 

    public function addToUserProCart($newProduct){

        $this->userProCart []= $newProduct;

    }

    public function removeFromUserProCart($product){


    }
 */

}

//$userPro = new $userPro();
//$userPro->userProCart->addToUserProCart();