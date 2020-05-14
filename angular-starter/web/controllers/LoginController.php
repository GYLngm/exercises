<?php

require_once("web/repository/UserRepository.php");
require_once("web/models/User.php");

class LoginController
{
    private $repo;
    private $is_login = false;

    public function __construct()
    {
        $this->repo = new UserRepository();
    }

    public function login(string $username, string $password)
    {
        //$user = $this->repo->findUsers($username);
        $user = $this->repo->load_user($username, UserRepository::BY_USERNAME);

        if(empty($user))
        {
            echo 'no such user'.PHP_EOL;
            return false;
        }

        if($user->getPassword() != $password)
        {
            echo 'password incorrect'.PHP_EOL;
            return false;
        }

        $_SESSION['user'] = $user;
        $this->repo->loginUser($user);

        return true;
    }

    public function logout()
    {
        $repo->logoutUser($_SESSION['user']);
        header('Status: 301 Moved Permanently', false, 301);    
        header("Location:http://".$_SERVER['HTTP_POST']);
    }

    public function register(string $username, string $password, $request = null)
    {
        $user  = new User(true,$username,$password);
        $this->repo->addUser($user);
        $_SESSION['user'] = $user;
    }

}