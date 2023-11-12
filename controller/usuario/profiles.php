<?php

require_once "../../connection.php";
require_once "../../model/usuario.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('smart_eco');
$pdo->query('USE smart_eco;');

$usuario = new Usuario();
if (!isset($data['usuario'])) {
    echo json_encode(array("Success" => false));
} else {
    $usuario->setUsuario($data['usuario']);
    $array = $usuario->readSingleUser($pdo);
    if($array){
        echo json_encode(array("success" => true, "result" => $array));
    }
    else{
        echo json_encode(array("success" => false));
    }  
    
}

?>