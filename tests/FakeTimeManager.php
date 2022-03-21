<?php


namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\TimeManager;
//maybe stub is a better option
class FakeTimeManager  implements TimeManager
{
    private array $morning = ["6","7","8","9","10","11","12"];
    private array $evening = ["12","13","14","15","16","17","18","19"];
    private array $night  = ["20","21","22","23","24","1","2","3","4","5"];

    public function getGreetingBasedOnTheHour(String $inputDate, String $name): string
    {
        if(in_array($inputDate,$this->morning)){return "¡Buenos días ".$name."!";}
        else if (in_array($inputDate,$this->evening)){return "¡Buenos tardes ".$name."!";}
        else if (in_array($inputDate,$this->night)){return "¡Buenos noches ".$name."!";}
    }
}