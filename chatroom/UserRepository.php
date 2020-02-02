<?php

require_once("dbConnections.php");
require_once("User.php");

class UserRepository extends dbConnections
{

    public function addUser(User $user) : bool
    {
        $stm = $this->getInstance()
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

    public function findUsers(string $username = null) : array
    {
        if($username != null){
            $stm = $this->getInstance()->prepare('SELECT * FROM users WHERE username=? LIMIT 1');
            $stm->execute([$username]);
            return $stm->fetch();
        }

        return $this->getInstance()->query('
            SELECT * 
            FROM users
        ')->fetchAll();
    }

    public function findOnlineUsers() : array
    {
        $stm = $this->getInstance()->prepare('SELECT * FROM users WHERE online = ?');
        $stm->execute([true]);

        return $stm->fetchAll();
    }

    public function loginUser(User $user)
    {
        $stm = $this->getInstance()->prepare('UPDATE users SET online=!online Where uid=?');
        return $stm->execute([$user->getUid()]);
    }

}