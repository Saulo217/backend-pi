<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";
require_once "../../model/usuario.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco;");

$usuario = new Usuario();
$usuario->setUsuario($data["usuario"]);
$user_data = $usuario->readSingleUser($pdo);

$plantas = new MinhasPlantas();

if (isset($data["apelido"]) &&
    isset($data["nomeCientifico"]) &&
    isset($data["dtInicio"]) &&
    isset($data["cor"]) &&
    isset($user_data["email"])
) {
    $plantas->setApelido($data["apelido"]);
    $plantas->setNome_cientifico($data["nomeCientifico"]);
    $plantas->setData_nascimento($data["dtInicio"]);
    $plantas->setCor($data["cor"]);
    $plantas->setEmail_usuario($user_data["email"]);
    $plantas->create($pdo);
    
    echo json_encode(array("success" => true));

} else {
  echo json_encode(array("success" => false));
}
