<?php
require_once "../../connection.php";
require_once "../../model/bugs.php";

$data = json_decode(file_get_contents("php://input"), true);

$pdo = NewConnection('PI');
$pdo->query('USE PI;');

$bug = new Bugs();

if (isset($data['bug'])) {

    $bug->setDescricao($data['bug']);
    $bug->setData_contato(date("Y-m-d"));
    $bug->create($pdo);

    echo json_encode(array("success" => true));
} else {
    echo json_encode(array("success" => false));
}
