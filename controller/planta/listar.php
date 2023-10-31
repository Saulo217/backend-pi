<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";

$pdo = NewConnection("PI");
$pdo->query("USE PI;");

$plantas = new MinhasPlantas();
$array = $plantas->read($pdo);
