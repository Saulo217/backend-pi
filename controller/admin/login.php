<?php
require_once "../../connection.php";
require_once "../../model/usuario.php";

$pdo = NewConnection("smart_eco");
$pdo->query("USE smart_eco");

$admin = new Usuario();

if (isset($_POST["admin"]) && isset($_POST["admPass"])) {
    $admin->setUsuario($_POST["admin"]);
    $admin->setSenha($_POST["admPass"]);
    $array = $admin->readSingleUser($pdo);

    if ($array["usuario"] == $admin->getUsuario() && $array["senha"] == $admin->getSenha()) {
        setcookie("admin", $admin->getUsuario(), 0, "/");
        header("location: http://localhost/backend-pi/view/pages/admin_home.php");
    } else {
        header("location: http://localhost/backend-pi/view/pages/admin_login.php");
    }
}
