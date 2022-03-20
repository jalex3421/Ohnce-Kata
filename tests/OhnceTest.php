<?php


namespace Deg540\PHPTestingBoilerplate\Test;
use Deg540\PHPTestingBoilerplate\Ohnce;
use PHPUnit\Framework\TestCase;


class OhnceTest extends TestCase{

    /**
     * @setUp
     */
    protected function setUp():void{
        parent::setUp();
        //initial name of user !!
        $sessionManager = new FakeSessionManager();
        $this->Ohnce=  new Ohnce("Alejandro",$sessionManager);
    }

    /**
     * @test
     */
    public function helloMorningOhce(){

        $response = $this->Ohnce->executeOhnce("ohnce");

        $this->assertEquals("¡Buenos días Alejandro!",$response);
    }

    /**
     * @test
     */
    public function helloEveningOhce(){

        $response = $this->Ohnce->executeOhnce("ohnce");

        $this->assertEquals("¡Buenos tardes Alejandro!",$response);
    }

    /**
     * @test
     */
    public function helloNightOhce(){

        $response = $this->Ohnce->executeOhnce("ohnce");

        $this->assertEquals("¡Buenas noches Alejandro!",$response);
    }

    /**
     * @test
     */
    public function reverseWord(){

        $response =$this->Ohnce->executeOhnce("hola");

        $this->assertEquals("aloh",$response);
    }

    /**
     * @test
     */
    public function stopOhnce(){

        $response = $this->Ohnce->executeOhnce("Stop!");

        $this->assertEquals("¡Adios Alejandro!",$response);
    }

    /**
     * @test
     */
    public function isPalindrome(){

        $response = $this->Ohnce->executeOhnce("oto");

        $this->assertEquals("¡Bonita palabra!",$response);
    }






}