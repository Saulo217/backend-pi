<?php
require_once "../../connection.php";
require_once "../../model/plantas_ornamentais.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco");

$planta = new PlantasOrnamentais();

if (isset($data["nomeCientifico"]) &&
    isset($data["nomePopular"]) &&
    isset($data["dataInicioFlorescimento"]) &&
    isset($data["dataFimFlorescimento"]) &&
    isset($data["idadeMinimaFlorescimento"]) &&
    isset($data["qtdAguaRegacao"]) &&
    isset($data["temperaturaIdeal"]) &&
    isset($data["umidadeIdeal"]) &&
    isset($data["iluminacaoIdeal"]) &&
    isset($data["fotoPlanta"])
) {
    $planta->setNome_cientifico($data["nomeCientifico"]);
    $planta->setNomePopular($data["nomePopular"]);
    $planta->setData_inicio_florescimento($data["dataInicioFlorescimento"]);
    $planta->setData_fim_florescimento($data["dataFimFlorescimento"]);
    $planta->setIdade_minima_florescimento($data["idadeMinimaFlorescimento"]);
    $planta->setQuantidade_agua_regacao($data["qtdAguaRegacao"]);
    $planta->setTemperatura_ideal($data["temperaturaIdeal"]);
    $planta->setUmidade_ideal($data["umidadeIdeal"]);
    $planta->setIluminacao_ideal($data["iluminacaoIdeal"]);
    $planta->setFoto_planta($data["fotoPlanta"]);
    $planta->create($pdo);

    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
