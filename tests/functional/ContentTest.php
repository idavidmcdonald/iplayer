<?php

class ContentTest extends PHPUnit_Extensions_Selenium2TestCase
{
    public function setUp()
    {   
        $this->setBrowser('firefox');
        $this->setBrowserUrl('http://localhost:8080/'); 
    }

    public function testContentContainsProgrammeTitleAndProgrammeImg()
    {
        $this->url('d/1');

        $titleText = $this->byClassName('programme-title')->text();
        $this->assertNotEmpty($titleText);

        $imgSrc = $this->byClassName('programme-image')->attribute('src');
        $this->assertNotEmpty($imgSrc);
    }
}                               
