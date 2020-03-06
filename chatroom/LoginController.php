<?php

require_once("UserRepository.php");
require_once("User.php");

class LoginController
{
    private $is_login = false;

    public function __construct()
    {

    }

    public function login(string $username, string $password)
    {
        $repo = new UserRepository();
        $user = $repo->findUsers($username);
        
        if($user == null || empty($user)) 
            return false;

        //session_start();
        $_SESSION['user'] = $user;

        return $user;
    }

}