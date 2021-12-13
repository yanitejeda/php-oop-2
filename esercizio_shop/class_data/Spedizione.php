<?php

trait Spedizione{
  protected  $spedizione = "10";

  public function setSpedizione (){
      $this->spedizione;
  }

    public function getSpedizione($_costo){
        return $this->$_costo;
    }


}