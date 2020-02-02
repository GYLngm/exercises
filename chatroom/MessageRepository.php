<?php

require_once("dbConnections.php");
require_once("User.php");
require_once("Message.php");

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