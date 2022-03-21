<?php
namespace Deg540\PHPTestingBoilerplate;

interface TimeManager
{
    public function getGreetingBasedOnTheHour(String $inputDate, String $name): string;
}