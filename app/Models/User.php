<?php

declare(strict_types=1);

namespace App\Models;

class User
{
    private $id, $name, $email, $color_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getColor()
    {
        return $this->color_id;
    }

    public function setColor($color_id)
    {
        $this->color_id = $color_id;
    }
}
