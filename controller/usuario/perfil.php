<?php

require_once "../../connection.php";
require_once "../../model/usuario.php";

$pdo = NewConnection('PI');
$pdo->query('USE PI;');

$usuario = new Usuario();

