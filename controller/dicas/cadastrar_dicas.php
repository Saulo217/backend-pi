<?php
require_once "../../connection.php";
require_once "../../model/dicas.php";
$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco;");

$dicas = new dicas();

if (isset($data["titulo"]) && isset($data["subtitulo"]) && isset($data["corpo"]) && isset($data["nomeCientifico"])) {
    $dicas->setTitulo($data["titulo"]);
    $dicas->setSubtitulo($data["subtitulo"]);
    $dicas->setCorpo($data["corpo"]);
    $dicas->setNomeCientifico($data["nomeCientifico"]);
    $dicas->create($pdo);
    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
