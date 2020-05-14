<?php

require_once("User.php");
require_once("UserRepository.php");

use PHPUnit\Framework\TestCase;

class UserRepositoryTest extends TestCase
{

    public function testFindUsers()
    {

    }

    public function testLoginUser()
    {

    }

    public function testAddUser()
    {

        $user = new User(true);
        $user->setUsername('Jiayu');
        $user->setPassword('12345678');
        $user->setIpAddress('192.168.1.5');
        
        $this->repo->addUser($user);
    }
    public function testLoad_by_username()
    {
        $repo = new UserRepository();
        $user = $repo->load_by_username('20130757');
        var_dump($user);
    }
    public function testFindOnlineUsers()
    {

    }

}
