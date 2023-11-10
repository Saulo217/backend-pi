<?php
require_once "../../connection.php";
require_once "../../model/umidade.php";

$Success = 0;
$ErrorUmidadeIsNull = 1;
$ErrorLigadoIsNull = 2;
$ErrorDataIsNull = 3;

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('smart_eco');
$pdo->query("USE smart_eco;");

$umidade = new Umidade();
$result = 0;

$result += isset($data["umidade"]) ? $Success : $ErrorUmidadeIsNull;
$result += isset($data["ligado"]) ? $Success : $ErrorLigadoIsNull;
$result += isset($data["data"]) ? $Success : $ErrorDataIsNull;

if (!$result) {
    $umidade->setUmidade($data["umidade"]);
    $umidade->setLigado($data["ligado"]);
    $umidade->setDataCaptura($data["data"]);

    $umidade->create($pdo);
    echo $result;
    return;

} else {
    echo $result;
}
