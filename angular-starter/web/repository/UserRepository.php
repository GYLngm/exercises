<?php

require_once("web/dbConStatic.php");
require_once("web/models/User.php");

class UserRepository
{
    
    const BY_USERNAME = 1;
    const BY_UID = 2;

    public function addUser(User $user) : bool
    {
        $stm = dbConStatic::getInstance()
            ->prepare('
                INSERT INTO users(uid,username,password,online,ip_address,create_datetime) 
                VALUES(0,?,?,?,?,now())
                ');

        return $stm->execute([
            $user->getUsername(),
            $user->getPassword(),
            $user->getOnline(),
            $user->getIpAddress(),
        ]);
    }

    public function findUsers(string $username = null, $fetchAll = false)
    {
        if($fetchAll) {
            $stm = dbConStatic::getInstance()->prepare('SELECT * FROM users');
            $stm->setFetchMode(PDO::FETCH_CLASS,'User');
            $stm->execute();
            return $stm->fetchAll();
        } else {
            if($username != null){
                $stm = dbConStatic::getInstance()->prepare('SELECT * FROM users WHERE username=? LIMIT 1');
                $stm->execute([$username]);
                return $stm->fetchObject("User");
            } 

            return false;
        }
    }

    public function load_by_username($username)
    {
        $stm = dbConStatic::getInstance()->prepare('SELECT * FROM users WHERE username=? LIMIT 1');
        //$stm->setFetchMode(PDO::FETCH_CLASS, 'User');
        $stm->execute([$username]);
        return $stm->fetchObject('User');
    }

    public function load_by_uid($uid)
    {
        $stm = dbConStatic::getInstance()->prepare('SELECT * FROM users WHERE uid=? LIMIT 1');
        $stm->execute([$uid]);
        return $stm->fetchObject('User');
    }

    public function load_user($var, $trigger = 1)
    {
        switch($trigger){
            case 1:
                if(!is_string($var))
                    return false;

                return $this->load_by_username($var);
                break;
            case 2:
                if(!is_int($var))
                    return false;
                
                return $this->load_by_uid($uid);
                break;
        }
    }

    public function findOnlineUsers() : array
    {
        $stm = dbConStatic::getInstance()->prepare('SELECT * FROM users WHERE online = ?');
        $stm->execute([true]);

        return $stm->fetchAll(PDO::FETCH_CLASS);
    }

    public function loginUser(User $user)
    {
        $stm = dbConStatic::getInstance()->prepare('UPDATE users SET online=1 Where uid=?');
        return $stm->execute([$user->getUid()]);
    }

    public function logoutUser(User $user){
        $stm = dbConStatic::getInstance()->prepare('UPDATE users SET online=0 Where uid=?');
        return $stm->execute([$user->getUid()]);
    }

}