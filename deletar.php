<?php

require __DIR__ . "/vendor/autoload.php";

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

if (isset($_POST["excluir"])) {
    if ($endereco->clienteId) {
        $endereco->deletarByClienteId();
    }
    $cliente->deletar();

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
    );
}

include __DIR__ . "/includes/header.php";
include __DIR__ . "/includes/confirmar-delete.php";
include __DIR__ . "/includes/footer.php";
