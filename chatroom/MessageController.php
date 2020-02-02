<?php

require_once("User.php");

class MessageController
{
    private $repository;

    public function __construct()
    {
        
    }

    public function sendText()
    {
        $req_arr = $_POST['package'];
        var_dump($req_arr);

    }

    public function ajaxUpdate()
    {
        $res = [
            'messages' => array(),
            'users' => array(),
        ];
        echo json_encode($res);
    }
}

$msgC = new MessageController();
$msgC->sendText();
$msgC->ajaxUpdate();