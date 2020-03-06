<?php

require_once("vendor/autoload.php");
require_once("User.php");
require_once("LoginController.php");

use PHPUnit\Framework\TestCase;

class LoginControllerTest extends TestCase
{
    private $controller;

    public function __construt()
    {
        super();
        $this->controller = new LoginController();
    }

    public function testLogin()
    {
        $this->controller = new LoginController();
        $actual = $this->controller->login("Jiayu", "12345678");
        
        var_dump($actual);
        //$this->assertFalse($actual);

    }

}
