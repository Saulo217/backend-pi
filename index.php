<?php
require_once "./connection.php";

$file = "./sql/PI_SQL.sql";
$sqlFile = fopen($file, "r") or die("Unable to open a file");

$pdo = NewConnection();
try {
  $pdo->query(fread($sqlFile, filesize($file)));
} catch(PDOException $error) {
  echo "Error: " . $error->getMessage();
}

fclose($sqlFile);

header("location: ../backend-pi/view/pages/index.php");
