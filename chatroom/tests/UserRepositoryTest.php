<?php

require_once("vendor/autoload.php");
require_once("User.php");
require_once("UserRepository.php");

use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{

    public function __construt()
    {
        super();
    }

    public function testFindUsers()
    {
        $repo = new UserRepository();
        $actual = $repo->findUsers("jiayu", true);

    }

    public function testLoginUser()
    {

    }

    public function testAddUser()
    {
        $repo = new UserRepository();
        $user = new User();
        $user->setUsername('20130757');
        $user->setPassword('Morgan_ljy');
        $user->setIpAddress('192.168.1.5');
        
        $repo->addUser($user);
    }

    public function testFindOnlineUsers()
    {

    }

}
