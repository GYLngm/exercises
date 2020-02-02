<?php

require_once("User.php");
require_once("UserRepository.php");

use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{

    private $repo;

    public function __construt()
    {
        super();
        $this->repo = new UserRepository();
    }

    public function testFindUsers()
    {

    }

    public function testLoginUser()
    {

    }

    public function testAddUser()
    {

        $user = new User();
        $user->setUsername('Jiayu');
        $user->setPassword('12345678');
        $user->setIpAddress('192.168.1.5');
        
        $this->repo->addUser($user);
    }

    public function testFindOnlineUsers()
    {

    }

}
