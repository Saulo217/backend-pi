<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";
require_once "../../model/usuario.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco;");

$plantas = new MinhasPlantas();

if (isset($data["apelido"]) &&
    isset($data["nomeCientifico"]) &&
    isset($data["dtInicio"]) &&
    isset($data["cor"]) &&
    isset($data["email"])
) {
    $plantas->setApelido($data["apelido"]);
    $plantas->setNome_cientifico($data["nomeCientifico"]);
    $plantas->setData_nascimento($data["dtInicio"]);
    $plantas->setCor($data["cor"]);
    $plantas->setEmail_usuario($data["email"]);
    $plantas->create($pdo);

} else {
    header("location: ../../view/pages/home.php");
}
