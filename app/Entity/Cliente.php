<?php

namespace App\Entity;

use \App\Db\Database;
use PDO;

class Cliente
{

    public $id;

    public $nome;

    public $cpf;

    public $rg;

    public $telefone;

    public $dataNasc;

    public function cadastrar()
    {
        $this->dataNasc = date("Y-m-d");
        $database = new Database("cliente");

        $this->id = $database->insert([
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            "rg" => $this->rg,
            "telefone" => $this->telefone,
            "dataNasc" => $this->dataNasc,
        ]);

        return true;
    }

    public function atualizar()
    {
        return (new Database("cliente"))->update('id = ' . $this->id, [
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            "rg" => $this->rg,
            "telefone" => $this->telefone,
            "dataNasc" => $this->dataNasc,
        ]);;
    }

    public static function getClientes($where = null, $order = null, $limit = null)
    {
        return (new Database("cliente"))->select(
            $where,
            $order,
            $limit
        )->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getClienteById($id)
    {
        return (new Database("cliente"))->select(
            'id = ' . $id
        )->fetchObject(self::class);
    }
}
