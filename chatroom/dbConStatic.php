<?php

require_once("./dbConInterface.php");

class dbConStatic implements dbConInterface
{
    
    const USER = 'mgnl';
    const PASSWORD = 'password';

    private static $dbh;

    public static function getInstance()
    {
        if(is_null(self::$dbh)){
            try{
                self::$dbh = new PDO('mysql:host=localhost;dbname=chatroom', dbConStatic::USER, dbConStatic::PASSWORD);
            }catch(Exception $e){
    
            }

        }
        return self::$dbh;
    }

}