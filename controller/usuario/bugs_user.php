<?php
require_once "../../connection.php";
require_once "../../model/bugs.php";

$pdo = NewConnection('PI');
$pdo->query('USE PI;');

$bug = new Bugs();

if (isset($_POST['bug'])) {

    $bug->setDescricao($_POST['bug']);
    $bug->setData_contato(date("Y-m-d"));
    $bug->create($pdo);

    header("location: http://localhost/backend-pi/view/pages/home.php");
} else {
    header("location: http://localhost/backend-pi/view/pages/report.php");
}
