<?php
require_once "./connection.php";
require_once "./model/sort.php";

$pdo = NewConnection();

$file = "./sql/PI_SQL.sql";
$sqlFile = fopen($file, "r") or die("Unable to open a file");

try {
    $pdo->query(fread($sqlFile, filesize($file)));
} catch (PDOException $error) {
    echo "Error: " . $error->getMessage();
}
fclose($sqlFile);

header("location: ../backend-pi/view/pages/index.php");
