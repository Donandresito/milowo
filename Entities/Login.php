<?php

class Login
{
    private $login_id;
    private $usser;
    private $password;


    public function getLoginId()
    {
        return $this->login_id;
    }

    public function setLoginId($login_id)
    {
        $this->login_id = $login_id;
    }

    public function getUsser()
    {
        return $this->usser;
    }

    public function setUsser($usser)
    {
        $this->usser = $usser;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }


}