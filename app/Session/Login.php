<?php

namespace App\Session;

class Login
{

    public static function init()
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public static function login($usuario)
    {
        self::init();

        $_SESSION['usuario'] = [
            'id' => $usuario->id,
            'username' => $usuario->username
        ];

        header("location: index.php");
        exit();
    }

    public static function isLogged()
    {
        self::init();

        return isset($_SESSION['usuario']['id']);
    }

    public static function requireLogin()
    {
        if (!self::isLogged()) {
            header("location: login.php");
            exit();
        }
    }

    public static function requireLogout()
    {
        if (self::isLogged()) {
            header("location: index.php");
            exit();
        }
    }

    public static function getUsuarioLogado()
    {
        self::init();
        return self::isLogged() ? $_SESSION['usuario'] : null;
    }

    public static function logout()
    {
        self::init();

        unset($_SESSION['usuario']);
        header("location: login.php");
        exit();
    }
}
