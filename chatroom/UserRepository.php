<?php

class UserRepository extends dbConnections
{

    public function addUser(User $user) : bool
    {
        $stm = $this->getInstance()
            ->prepare('
                INSERT INTO users(uid,username,password,online,ip_address,create_datetime) 
                VALUES(?,?,?,?,?,now())
                ');

        return $stm->execute([
            $user->getUid(),
            $user->getUsername(),
            $user->getPassword(),
            $user->getOnline(),
            $user->getIpAddress(),
        ]);
    }

    public function findUsers() : array
    {
        return $this->getInstance()->query('
            SELECT * 
            FROM users
        ')->fetchAll();
    }

    public function findOnlineUsers() : array
    {
        $stm = $this->getInstance()->prepare('SELECT * FROM users WHERE online = ?');
        $stm->execute([false]);

        return $stm->fetchAll();
    }

    public function loginUser()
    {
        return $this->getInstance()->exec('UPDATE users SET online=!online');
    }


}