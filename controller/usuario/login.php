<?php

require_once "../../connection.php";
require_once "../../model/usuario.php";

$pdo = NewConnection('smart_eco');
$pdo->query('USE smart_eco;');

$usuario = new Usuario();

if (isset($_POST['usuario']) && isset($_POST["senha"])) {
    $usuario->setUsuario($_POST["usuario"]);
    $usuario->setSenha($_POST["senha"]);
    $array = $usuario->login($pdo);
    if ($array['usuario'] == $usuario->getUsuario() && $array['senha'] == $usuario->getSenha()) {
        setcookie("usuario", $usuario->getUsuario(), 0, '/');
        header("location: http://localhost/backend-pi/view/pages/home.php");
    } else {
        header("location: http://localhost/backend-pi/view/pages/login.php");
    }

}
