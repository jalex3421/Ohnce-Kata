<?php


namespace Deg540\PHPTestingBoilerplate\Test;

use Deg540\PHPTestingBoilerplate\SessionManager;

class StubSessionManager  implements SessionManager
{
    public function getGreetingBasedOnTheHour(): string{
        return "¡Buenos días!";
    }
}