<?php

require __DIR__ . "/vendor/autoload.php";

use \App\Entity\Usuario;
use \App\Session\Login;

Login::requireLogout();

$alertaLogin = '';
$alertaSignin = '';

if (isset($_POST['acao'])) {
    switch ($_POST['acao']) {
        case 'login':
            if (isset($_POST['username'], $_POST['password'])) {
                $usuario = Usuario::getUsuarioByUsername($_POST['username']);

                if (!$usuario instanceof Usuario || !password_verify($_POST['password'], $usuario->password)) {
                    $alertaLogin = 'Nome de Usuário ou Senha inválido(a)!';
                    break;
                }
            }

            Login::login($usuario);

            break;
        case 'signin':
            if (isset($_POST['username'], $_POST['password'])) {
                $usuario = Usuario::getUsuarioByUsername($_POST['username']);
                if ($usuario instanceof Usuario) {
                    $alertaSignin = 'O Usuário já está em uso!';
                    break;
                }

                $usuario = new Usuario;
                $usuario->username = $_POST['username'];
                $usuario->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $usuario->cadastrar();

                Login::login($usuario);
            }
            break;
    }
}

include __DIR__ . "/includes/header.php";
include __DIR__ . "/includes/formulario-login.php";
include __DIR__ . "/includes/footer.php";
