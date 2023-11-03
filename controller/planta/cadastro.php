<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";
require_once "../../model/usuario.php";

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco;");

$plantas = new MinhasPlantas();
$usuario = new Usuario();
$usuario->setUsuario($_COOKIE["usuario"]);
$array = $usuario->readSingleUser($pdo);

if (isset($_POST["apelido"]) && isset($_POST["nomeCientifico"]) && isset($_POST["dtInicio"]) && isset($_POST["cor"])) {
    $plantas->setApelido($_POST["apelido"]);
    $plantas->setNome_cientifico($_POST["nomeCientifico"]);
    $plantas->setData_nascimento($_POST["dtInicio"]);
    $plantas->setCor($_POST["cor"]);
    $plantas->setEmail_usuario($array["email"]);
    $plantas->create($pdo);

} else {
    header("location: ../../view/pages/home.php");
}
