<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco;");

$plantas = new MinhasPlantas();
$_POST["plantas"] = $array = $plantas->read($pdo);
header("location: http://localhost/view/pages/home.php");
