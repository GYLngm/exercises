<?php

require_once("vendor/autoload.php");
require_once("LoginController.php");
require_once("User.php");

use PHPUnit\Framework\TestCase;

class LoginControllerTest extends TestCase
{
    public function testLogin()
    {
        $controller = new LoginController();
        $controller->login("Jiayu", "12345678");
    }

    public function testRegister()
    {
        $controller = new LoginController();
        $controller->register("hahaha", "12345678");
    }
}