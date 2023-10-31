<?php

require_once "../../connection.php";
require_once "../../model/usuario.php";

$pdo = NewConnection('PI');
$pdo->query('USE PI;');

$usuario = new Usuario();
$usuario->setCargo("ROLE_USUARIO");

if (isset($_POST['nome']) && isset($_POST["email"]) && isset($_POST["datanasc"]) && isset($_POST["usuario"]) && isset($_POST["senha"])) {
    $usuario->setNome($_POST["nome"]);
    $usuario->setEmail($_POST["email"]);
    $usuario->setData_nascimento($_POST["datanasc"]);
    $usuario->setUsuario($_POST["usuario"]);
    $usuario->setSenha($_POST["senha"]);
    $usuario->create($pdo);

    header("location: http://localhost/backend-pi/view/pages/home.php");

} else {
    header("location: http://localhost/backend-pi/view/pages/cadastro.php");
}
