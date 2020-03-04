<?php

require_once("UserRepository.php");
require_once("User.php");

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
        $user = $this->findUsers($username);
        var_dump($user);
        session_start();
    }

}