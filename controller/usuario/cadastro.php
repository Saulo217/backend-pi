<?php

require_once "../../connection.php";
require_once "../../model/usuario.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('smart_eco');
$pdo->query('USE smart_eco;');

$usuario = new Usuario();
$usuario->setCargo("ROLE_USUARIO");

if (isset($data['nome']) &&
    isset($data["email"]) &&
    isset($data["datanasc"]) &&
    isset($data["usuario"]) &&
    isset($data["senha"])
) {
    $usuario->setNome($data["nome"]);
    $usuario->setEmail($data["email"]);
    $usuario->setData_nascimento($data["datanasc"]);
    $usuario->setUsuario($data["usuario"]);
    $usuario->setSenha($data["senha"]);
    $usuario->create($pdo);

    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
