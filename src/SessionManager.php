<?php
namespace Deg540\PHPTestingBoilerplate;

interface SessionManager
{
    public function getGreetingBasedOnTheHour(String $inputDate, String $name ): string;

}