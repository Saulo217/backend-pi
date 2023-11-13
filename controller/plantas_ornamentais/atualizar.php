<?php
require_once "../../connection.php";
require_once "../../model/plantas_ornamentais.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco");

$planta = new PlantasOrnamentais();

if (isset($data["nome_cientifico"]) &&
    isset($data["nome_popular"]) &&
    isset($data["data_inicio_florescimento"]) &&
    isset($data["data_fim_florescimento"]) &&
    isset($data["idade_minima_florescimento"]) &&
    isset($data["quantidade_agua_regacao"]) &&
    isset($data["temperatura_ideal"]) &&
    isset($data["umidade_ideal"]) &&
    isset($data["iluminacao_ideal"]) &&
    isset($data["foto_planta"])
) {
    $planta->setNome_cientifico($data["nome_cientifico"]);
    $planta->setNomePopular($data["nome_popular"]);
    $planta->setData_inicio_florescimento($data["data_inicio_florescimento"]);
    $planta->setData_fim_florescimento($data["data_fim_florescimento"]);
    $planta->setIdade_minima_florescimento($data["idade_minima_florescimento"]);
    $planta->setQuantidade_agua_regacao($data["quantidade_agua_regacao"]);
    $planta->setTemperatura_ideal($data["temperatura_ideal"]);
    $planta->setUmidade_ideal($data["umidade_ideal"]);
    $planta->setIluminacao_ideal($data["iluminacao_ideal"]);
    $planta->setFoto_planta($data["foto_planta"]);
    $planta->update($pdo);

    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
