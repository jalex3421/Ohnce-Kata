<?php


namespace Deg540\PHPTestingBoilerplate;

use Cassandra\Date;
use Deg540\PHPTestingBoilerplate\TimeManager;

class Ohnce
{
    /*
     * Debería tener aquí los mensajes!! Y los arrays con tiempo
     */
    private String $name="";
    private TimeManager $sessionManager;

    function __construct(String $inputName, TimeManager $sessionManager)
    {
        $this->name = $inputName;
        $this->sessionManager = $sessionManager;
    }

    public function executeOhnce(String $initialWord):String
    {
        if($initialWord === 'ohnce'){
            return $this->sessionManager->getGreetingBasedOnTheHour(date('H'),$this->name);
        }
        else if($initialWord === 'Stop!'){
            return "¡Adios ".$this->name."!";
        }
        else if(strrev($initialWord) === $initialWord){
            return "¡Bonita palabra!";
        }
        else{return strrev($initialWord);}
    }

}