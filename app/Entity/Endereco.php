<?php

namespace App\Entity;

use \App\Db\Database;

class Endereco
{

    public $id;

    public $rua;

    public $bairro;

    public $numero;

    public $cidade;

    public $estado;

    public $clienteId;

    public function cadastrar()
    {
        $database = new Database("endereco");
        $this->id = $database->insert([
            "rua" => $this->rua,
            "bairro" => $this->bairro,
            "numero" => $this->numero,
            "cidade" => $this->cidade,
            "estado" => $this->estado,
            "clienteId" => $this->clienteId,
        ]);

        return true;
    }

    public function atualizar()
    {
        return (new Database("endereco"))->update('id = ' . $this->id, [
            "rua" => $this->rua,
            "bairro" => $this->bairro,
            "numero" => $this->numero,
            "cidade" => $this->cidade,
            "estado" => $this->estado,
            "clienteId" => $this->clienteId,
        ]);
    }

    public function deletarByClienteId()
    {
        return (new Database("endereco"))->delete('clienteId = ' . $this->clienteId);
    }

    public static function getEnderecoByClienteId($clienteId)
    {
        return (new Database("endereco"))->select(
            'clienteId = ' . $clienteId
        )->fetchObject(self::class);
    }
}
