<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";
require_once "../../model/usuario.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco;");

$usuario = new Usuario();
$usuario->setUsuario($data["usuario"]);
$array = $usuario->readSingleUser($pdo);

$email = $array["email"];
$array = null;

$plantas = new MinhasPlantas();
$array = $plantas->read(
    $pdo,
    " SELECT *
    FROM minhas_plantas
    INNER JOIN
    plantas_ornamentais ON minhas_plantas.nome_cientifico = plantas_ornamentais.nome_cientifico
    WHERE email_usuario = '" . $email . "';"
);

echo json_encode(array("success" => true, "result" => $array));
