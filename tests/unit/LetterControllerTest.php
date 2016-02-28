<?php

class LetterControllerTest extends \PHPUnit_Framework_TestCase
{   
    public function testGetNumPages() {
        $method = new ReflectionMethod(
          'AToZ\Controller\LetterController', 'getNumPages'
        );
 
        $method->setAccessible(true);

        $controller = new AToZ\Controller\LetterController(new \Slim\Slim());
 
        $this->assertEquals(2, $method->invokeArgs($controller, array(40,20)));
        $this->assertEquals(4, $method->invokeArgs($controller, array(64,20)));
    }
}  