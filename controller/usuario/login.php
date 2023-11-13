<?php

require_once "../../connection.php";
require_once "../../model/usuario.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('smart_eco');
$pdo->query('USE smart_eco;');

$usuario = new Usuario();

if (isset($data['usuario']) && isset($data["senha"])) {
    $usuario->setUsuario($data["usuario"]);
    $usuario->setSenha($data["senha"]);
    $array = $usuario->login($pdo);
    if ($array) {
        echo json_encode(array("usuario" => $usuario->getUsuario(), "success" => true));
    } else {
        echo json_encode(array("success" => false));
    }
} else {
    echo json_encode(array("success" => false));
}
