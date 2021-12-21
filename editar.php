<?php

require __DIR__ . "/vendor/autoload.php";

define('TITLE', 'Editar Cliente');

use \App\Entity\Cliente;
use \App\Entity\Endereco;
use \App\Session\Login;

Login::requireLogin();

if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
    redirectToIndex();
}

$cliente = Cliente::getClienteById($_GET['id']);
$endereco = Endereco::getEnderecoByClienteId($_GET['id']);

if (!$cliente instanceof Cliente) {
    redirectToIndex();
}

function redirectToIndex()
{
    header('location: index.php?status=error');
    exit();
}

if (isset($_POST["nome"], $_POST["cpf"], $_POST["rg"], $_POST["telefone"], $_POST["dataNasc"])) {
    foreach ($_POST['endereco'] as $teste) {
        echo '<pre>';
        print_r($teste);
        echo '</pre>';
    }
    exit;

    $cliente->nome = $_POST["nome"];
    $cliente->cpf = $_POST["cpf"];
    $cliente->rg = $_POST["rg"];
    $cliente->telefone = $_POST["telefone"];
    $cliente->dataNasc = $_POST["dataNasc"];
    $cliente->atualizar();

    if (hasEndereco()) {
        $endereco->rua = $_POST["rua"];
        $endereco->bairro = $_POST["bairro"];
        $endereco->numero = $_POST["numero"];
        $endereco->cidade = $_POST["cidade"];
        $endereco->estado = $_POST["estado"];
        $endereco->clienteId = $cliente->id;
        if ($endereco->id !== null) {
            $endereco->atualizar();
        } else {
            $endereco->cadastrar();
        }
    }

    header("location: index.php?status=success");
    exit();
}

function hasEndereco()
{
    return isset(
        $_POST["rua"],
        $_POST["bairro"],
        $_POST["numero"],
        $_POST["cidade"],
        $_POST["estado"]
    ) && strlen($_POST["rua"]) or
        strlen($_POST["bairro"]) or
        strlen($_POST["numero"]) or
        strlen($_POST["cidade"]) or
        strlen($_POST["estado"]);
}

include __DIR__ . "/includes/header.php";
include __DIR__ . "/includes/formulario.php";
include __DIR__ . "/includes/footer.php";
