<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Entity\Cliente;
use \App\Session\Login;

Login::requireLogin();

$clientes = Cliente::getClientes();

include __DIR__ . "/includes/header.php";
include __DIR__ . "/includes/lista.php";
include __DIR__ . "/includes/footer.php";
