<?php

class Rol
{
    private $rol_id;
    private $rol;

    public function getRolId()
    {
        return $this->rol_id;
    }

    public function setRolId($rol_id): void
    {
        $this->rol_id = $rol_id;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol): void
    {
        $this->rol = $rol;
    }


}