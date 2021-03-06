<?php

use App\Session\Login;

$usuarioLogado = Login::getUsuarioLogado();
$usuario = $usuarioLogado ?
    $usuarioLogado['username'] . '<a href="logout.php" class="font-weight-bold text-dark mr-auto">Sair</a>' :
    'Visitante<a href="logout.php" class="font-weight-bold text-dark mr-auto">Entrar</a>';
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CRUD Básico de Cliente</title>
</head>

<body class="bg-dark text-light">
    <div class="container">
        <div class="p-4 my-4 rounded bg-light text-dark">
            <h1>CRUD Básico</h1>

            <hr class="border-light">

            <div class="d-flex justify-content-between">
                <?= $usuario ?>
            </div>
        </div>