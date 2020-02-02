<?php


class dbConnections
{
    private $dbh;
    private $user = 'mgnl';
    private $password = 'password';

    public function getInstance() : PDO
    {
        if (!is_null($this->dbh)){
            try {
                $this->dbh = new PDO('mysql:host=localhost;dbname=chatroom', $this->user, $this->password);
            } catch (Exception $e) {
                echo $e->getMessage()."DataBase Connection error";

            }
        }
        return $this->dbh;
    }

}