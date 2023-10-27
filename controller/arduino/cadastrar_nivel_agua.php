<?php
require_once "../../connection.php";
require_once "../../model/nivel_agua.php";

$Success = 0;
$ErrorNivelAguaIsNull = 1;
$ErrorLigadoIsNull = 2;
$ErrorDataIsNull = 3;

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('PI');
$pdo->query("USE PI;");

$nivelAgua = new NivelAgua();
$result = 0;

$result += isset($data["nivel_agua"]) ? $Success : $ErrorNivelAguaIsNull;
$result += isset($data["ligado"]) ? $Success : $ErrorLigadoIsNull;
$result += isset($data["data"]) ? $Success : $ErrorDataIsNull;

if (!$result) {
    $nivelAgua->setNivelAgua($data["nivel_agua"]);
    $nivelAgua->setLigado($data["ligado"]);
    $nivelAgua->setDataCaptura($data["data"]);

    $nivelAgua->create($pdo);
    echo $result;
    return;
} else {
    echo $result;
}
