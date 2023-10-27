<?php
require_once "../../connection.php";
require_once "../../model/temperatura.php";

enum ArduinoCodes: int {
    case Success = 0;
    case ErrorTemperaturaIsNull = 1;
    case ErrorLigadoIsNull = 2;
    case ErrorDataIsNull = 3;
}

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('PI');
$pdo->query("USE PI;");

$temperatura = new Temperatura();
$result = 0;

$result += isset($data["temperatura"]) ? ArduinoCodes::Success->value : ArduinoCodes::ErrorTemperaturaIsNull->value;
$result += isset($data["ligado"]) ? ArduinoCodes::Success->value : ArduinoCodes::ErrorLigadoIsNull->value;
$result += isset($data["data"]) ? ArduinoCodes::Success->value : ArduinoCodes::ErrorDataIsNull->value;

if (!$result) {
    $temperatura->setTemperatura($data["temperatura"]);
    $temperatura->setLigado($data["ligado"]);
    $temperatura->setDataCaptura($data["data"]);

    $temperatura->create($pdo);
    echo $result;
    return;
} else {
    echo $result;
}
