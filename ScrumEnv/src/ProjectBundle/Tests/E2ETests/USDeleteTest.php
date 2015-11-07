<?php

class USDeleteTest extends PHPUnit_Extensions_SeleniumTestCase
{
    public function setUp()
    {
        $this->setBrowser('*firefox');
        $this->setBrowserUrl('http://localhost:8000');
    }    
    public function testDeleteOk()
    {
        $this->open('/ScrumTool/Backlog/bob/pacman2015/');
        $this->waitForPageToLoad("30000");
        $this->open("/ScrumTool/Project/bob/pacman2015");
        $this->click("link=backlog");
        $this->waitForPageToLoad("30000");
        $this->click("css=button.btn.btn-danger");
        $this->waitForPageToLoad("30000");

        $this->assertEquals($this->getLocation(),'http://localhost:8000/ScrumTool/Backlog/bob/pacman2015/');
        
    }  
}
?>
