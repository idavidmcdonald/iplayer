<?php

class NavigationTest extends PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {   
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost:8080/'); 
    }

    public function testClickOnLetterChoiceLinkRedirectsToFirstPageOfResultsForChosenLetter()
    {
        $this->url('a/2');
        $this->byID('letter-choice-b')->click();
        $this->assertEquals($this->getBrowserUrl() . 'b/1', $this->url());
    }

    public function testClickOn0To9LetterChoiceLinkRedirectsToFirstPageOfResultsFor0To9()
    {
        $this->url('c/1');
        $this->byID('letter-choice-0-9')->click();
        $this->assertEquals($this->getBrowserUrl() . '0-9/1', $this->url());
    }
}                               
