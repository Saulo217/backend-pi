<?php

require_once "../../connection.php";
require_once "../../model/irrigacao.php";

$Success = 0;
$ErrorIrrigacaooIsNull = 1;
$ErrorLigadoIsNull = 2;
$ErrorDataIsNull = 3;

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('smart_eco');
$pdo->query("USE smart_eco;");

$irrigacao = new Irrigacao();
$result = 0;

$result += isset($data["irrigacao"]) ? $Success : $ErrorIrrigacaoIsNull;
$result += isset($data["ligado"]) ? $Success : $ErrorLigadoIsNull;
$result += isset($data["data"]) ? $Success : $ErrorDataIsNull;

if (!$result) {
    $temperatura->setIrrigacao($data["irrigacao"]);
    $temperatura->setLigado($data["ligado"]);
    $temperatura->setDataCaptura($data["data"]);

    $temperatura->create($pdo);
    echo $result;
    return;
} else {
    echo $result;
}
