<?php



class UserStandard{
    protected $userName ="";
    protected $userLastName="";
    protected $userEmail="";


    function __construct($_userName, $_userLastName, $_userEmail){
     
       
       
        $this->setUserName = ($_userName);
        $this->setUserLastName = ($_userLastName);
        $this->setUseEmail = ($_userEmail);

    }

    public function setUserName ($value){
        //controlli vadilità

        $this->userName = $value;
    }

    public function setUserLastName ($value){
        //controlli vadilità

        $this->userLastName = $value;
    } 
    public function setUserEmail ($value){
        //controlli vadilità

        $this->userEmail = $value;
    }
 
    public function getUserName(){
       return $this->userName;

    }
    public function getUserLastName(){
        return $this->userLastName;
 
    }
    
     public function getUserEmail(){
        return $this->userEmail;
 
    }

    
}