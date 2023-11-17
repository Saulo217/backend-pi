<?php
require_once "../../connection.php";
require_once "../../model/plantas_ornamentais.php";

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco");

$planta = new PlantasOrnamentais();

$array = $planta->readMany($pdo);

if ($array) {
    echo json_encode(array("success" => true, "plantas" => $array));
} else {
    echo json_encode(array("success" => false));
}
