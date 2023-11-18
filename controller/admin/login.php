<?php
require_once "../../connection.php";
require_once "../../model/usuario.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco");

$admin = new Usuario();

if (isset($data["admin"]) && isset($data["admPass"])) {
    $admin->setUsuario($data["admin"]);
    $admin->setSenha($data["admPass"]);
    $array = $admin->login($pdo);

    if ($array) {
        echo json_encode(array("admin" => $admin->getUsuario(), "success" => true));
    } else {
        echo json_encode(array("success" => false));
    }
} else {
    echo json_encode(array("success" => false));
}
