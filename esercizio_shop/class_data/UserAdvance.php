<?php

require_once __DIR__ ."/UserStandard.php";
require_once __DIR__ ."/ScontoT.php";

class UserAdvance extends UserStandard{
    protected $level;
    protected $discount  = "10";
    use ScontoT;
/* 
    function __construct( $_level, $_discount){
        parent::__construct($this->getUserName(),$this->getUserLastName(),$this->getUserEmail());
    
        $this->level = $_level;
        $this->discount =$_discount;
    } */

    
    function __construct( $_userName, $_userLastName,$_userEmail, $_level,$_discount){
        parent::__construct($_userName,$_userLastName,$_userEmail);
    

        $this->setLevel($_level);
        $this->setDiscount($_discount);
    }

    public function setLevel($_level){
        $this->level= $_level;
    }

    public function setDiscount($_discount){
        $this->discount=$_discount;
    }

    public function getLevel(){
        return $this->level;
    }
    public function getDiscount(){
        return $this->discount;
    }
    
/* 
    public function getInfoUser (){
       // return $this->userName . " ". $this->userLastName . " " .$this->userEmail;
        return parent::getUserEmail();
        return parent::getUserLastName();
        return parent::getUserName();
    }
 */
    
   
}