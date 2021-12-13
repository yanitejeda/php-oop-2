<?php

trait ScontoT{
    public $scontoT = '10';


   public function setScontoT(){
       $this->scontoT;
   }

   public function getScontoT($_sconto){
       return $this->$_sconto;
   }
}

