<?php


namespace Deg540\PHPTestingBoilerplate\Test;
use Deg540\PHPTestingBoilerplate\Ohce;
use PHPUnit\Framework\TestCase;


class OhceTest extends TestCase{

    /**
     * @setUp
     */
    protected function setUp():void
    {
        parent::setUp();
        $sessionManager = new FakeTimeManager();
        $this->Ohnce=  new Ohce("Alejandro",$sessionManager);
    }

    /**
     * @test
     */
    public function helloMorningOhce()
    {
        $response = $this->Ohnce->execute("ohnce");

        $this->assertEquals("¡Buenos días Alejandro!",$response);
    }

    /*
    /**
     * @test
     */
    /*
    public function helloEveningOhce()
    {
        $response = $this->Ohnce->execute("ohnce");

        $this->assertEquals("¡Buenos tardes Alejandro!",$response);
    }*/

    /*
    /**
     * @test
     */
    /*
    public function helloNightOhce()
    {
        $response = $this->Ohnce->execute("ohnce");

        $this->assertEquals("¡Buenas noches Alejandro!",$response);
    }
    */
    /**
     * @test
     */
    public function reversesWord()
    {
        $response =$this->Ohnce->execute("hola");

        $this->assertEquals("aloh",$response);
    }

    /**
     * @test
     */
    public function stopsOnOhnce()
    {
        $response = $this->Ohnce->execute("Stop!");

        $this->assertEquals("¡Adios Alejandro!",$response);
    }

    /**
     * @test
     */
    public function isPalindrome()
    {
        $response = $this->Ohnce->execute("oto");

        $this->assertEquals("¡Bonita palabra!",$response);
    }

}