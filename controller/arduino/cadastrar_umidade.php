<?php
require_once "../../connection.php";
require_once "../../model/umidade.php";

enum ArduinoCodes: int {
    case Success = 0;
    case ErrorUmidadeIsNull = 1;
    case ErrorLigadoIsNull = 2;
    case ErrorDataIsNull = 3;
}

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('PI');
$pdo->query("USE PI;");

$umidade = new Umidade();
$result = 0;

$result += isset($data["umidade"]) ? ArduinoCodes::Success->value : ArduinoCodes::ErrorUmidadeIsNull->value;
$result += isset($data["ligado"]) ? ArduinoCodes::Success->value : ArduinoCodes::ErrorLigadoIsNull->value;
$result += isset($data["data"]) ? ArduinoCodes::Success->value : ArduinoCodes::ErrorDataIsNull->value;

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
