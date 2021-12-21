<?php

namespace App\Entity;

use \App\Db\Database;

class Usuario
{

    public $id;

    public $username;

    public $password;

    public function cadastrar()
    {
        $database = new Database("usuario");
        $this->id = $database->insert([
            'username' => $this->username,
            'password' => $this->password
        ]);

        return true;
    }

    public static function getUsuarioByUsername($username)
    {
        return (new Database('usuario'))->select('username = "' . $username . '"')->fetchObject(self::class);
    }
}
