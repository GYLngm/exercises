<?php

if(!isset($_SESSION['user']))
    header("Location:http://".$_SERVER['HTTP_HOST']);

require_once("web/models/User.php");

class MessageController
{
    private $repository;

    public function __construct(User $user, string $content)
    {
        $this->sendText(); 
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
/*
$msgC = new MessageController($_SESSION['user']);

$msgC->sendText();
$msgC->ajaxUpdate();
*/