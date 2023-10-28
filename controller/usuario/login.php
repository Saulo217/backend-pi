<?php

require_once "../../connection.php";
require_once "../../model/usuario.php";

$pdo = NewConnection('PI');
$pdo->query('USE PI;');

$usuario = new Usuario();

if (isset($_POST['usuario']) && isset($_POST["senha"])) {
    $usuario->setUsuario($_POST["usuario"]);
    $usuario->setSenha($_POST["senha"]);
    $array = $usuario->read($pdo);
    if ($array['usuario'] == $usuario->getUsuario() && $array['senha'] == $usuario->getSenha()) {
        header("location: http://localhost/backend-pi/view/PWA_PI/pages/home.html");
    }

}
