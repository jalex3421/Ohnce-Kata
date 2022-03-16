<?php


namespace Deg540\PHPTestingBoilerplate;

use Cassandra\Date;
use Deg540\PHPTestingBoilerplate\SessionManager;

class Ohnce
{
    private String $name="";
    private SessionManager $sessionManager;

    function __construct(String $inputName,SessionManager $sessionManager)
    {
        $this->name = $inputName;
        $this->sessionManager = $sessionManager;
    }

    public function executeOhnce(String $initialWord):String{
        if($initialWord === 'ohnce') {
            return $this->sessionManager->getGreetingBasedOnTheHour(date('H'),$this->name);
        }
        else if($initialWord === 'Stop!'){
            return "¡Adios ".$this->name."!";
        }
        else if(strrev($initialWord)===$initialWord){
            return "¡Bonita palabra!";
        }
        else{return strrev($initialWord);}
    }





}