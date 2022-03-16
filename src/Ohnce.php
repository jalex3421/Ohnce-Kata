<?php


namespace Deg540\PHPTestingBoilerplate;

class Ohnce
{
    private String $name="";

    function __construct(String $inputName)
    {
        $this->name = $inputName;
    }

    public function executeOhnce(String $initialWord):String{
        if($initialWord === 'ohnce') {
            return "¡Buenos días ".$this->name."!";
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