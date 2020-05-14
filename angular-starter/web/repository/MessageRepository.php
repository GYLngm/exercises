<?php

require_once("web/dbConStatic.php");
require_once("web/models/User.php");
require_once("web/models/Message.php");

class MessageRepository extends dbConnections
{

    public function findAllByGroup(int $id_group) : array
    {
        $res = [];

        return $res;
    }


    public function findByUser(User $user) : array
    {
        $res = [];

        return $res;
        
    }

    public function saveMessage(Message $message) : bool
    {
        
        return false;
    }
}