<?php

class User
{
    private $uid;
    private $username;
    private $password;
    private $ip_address;
    private $create_datetime;
    private $online;

    public function __construct(){
        $this->online = false;
        $this->create_datetime = date('Y-m-d H:i:s', time());
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }


    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * @param string $ip_address
     */
    public function setIpAddress($ip_address)
    {
        $this->ip_address = $ip_address;
    }

    /**
     * @return mixed
     */
    public function getCreateDatetime()
    {
        return $this->create_datetime;
    }

    /**
     * @param mixed $create_datetime
     */
    public function setCreateDatetime($create_datetime)
    {
        $this->create_datetime = $create_datetime;
    }

    /**
     * @return bool
     */
    public function getOnline()
    {
        return $this->online;
    }

    /**
     * @param bool $online
     */
    public function setOnline($online)
    {
        $this->online = $online;
    }

}