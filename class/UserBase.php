<?php
class UserBase {

    
    protected $userName ="";
    protected $userLastName="";
    protected $userEmail;

    function __construct($_userName,$_userLastName,$_userEmail){


        $this->setUserName = ($_userName);
        $this->setUserLastName =( $_userLastName);
        $this->setUserEmail =( $_userEmail);

    }


    //leggere e modificare i dati

    public function setUserName ($value){
         //controlli vadilità

         $this->userName = $value;
    }

    public function getUserName ($value){


        //leggo il valore di name
      return  $this->userName;
   }



    public function setUserLastName ($value){
        $this->userLastName = $value;
        
    }

    public function getUserLastName ($value){

      return  $this->userLastName;
        
    }

    public function getFullUser(){
        return $this ->getUserName . " ". $this -> getUserLastName . " " . $this -> setUserEmail . "<br>";
    }



    public function setUserEmail ($value){
        $this->userEmail = $value;
        
    }
    public function getUserEmail ($value){
       return $this->userEmail;
        
    }
}


$istanza = new UserBase('gino','pino','gino@gmail.com');

/* $istanza->setUserName('gino');
$istanza->setUserLastName('pino');
$istanza->setUserEmail('gino@gmail.com');
 */
