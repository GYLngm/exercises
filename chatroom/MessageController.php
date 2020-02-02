<?php

class MessageController
{
    private $repository;

    public function __construct()
    {
        $this->repository = new UserRepository();
        
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