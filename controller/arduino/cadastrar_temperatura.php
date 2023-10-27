<?php
require_once "../../connection.php";
require_once "../../model/temperatura.php";

$Success = 0;
$ErrorTemperaturaIsNull = 1;
$ErrorLigadoIsNull = 2;
$ErrorDataIsNull = 3;

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('PI');
$pdo->query("USE PI;");

$temperatura = new Temperatura();
$result = 0;

$result += isset($data["temperatura"]) ? $Success : $ErrorTemperaturaIsNull;
$result += isset($data["ligado"]) ? $Success : $ErrorLigadoIsNull;
$result += isset($data["data"]) ? $Success : $ErrorDataIsNull;

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
