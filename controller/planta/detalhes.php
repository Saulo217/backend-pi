<?php
require_once "../../connection.php";
require_once "../../model/minhas_plantas.php";
require_once "../../model/historico.php";
require_once "../../model/umidade.php";
require_once "../../model/iluminacao.php";
require_once "../../model/nivel_agua.php";
require_once "../../model/temperatura.php";

function detalhes()
{
    $pdo = NewConnection("smart_eco");
    $pdo->query("USE smart_eco");

    $id = $_COOKIE["id_planta"];

    try {
        $sth = $pdo->prepare("SELECT * FROM
        minhas_plantas as mp inner join historico as h on h.id_planta = mp.id_planta
        inner join umidade as u on h.id_umidade = u.id_umidade
        inner join temperatura as t on h.id_temperatura = t.id_temperatura
        inner join nivel_agua as na on h.id_nivel_agua = na.id_nivel_agua
        inner join iluminacao as i on h.id_iluminacao = i.id_iluminacao
        WHERE mp.id_planta = " . $id);

        $sth->execute();
        return $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $erro) {
        echo "Error: " . $erro->getMessage();
    }

}

function dicas()
{
    $pdo = NewConnection("smart_eco");
    $pdo->query("USE smart_eco");

    $id = $_COOKIE["id_planta"];

    try {
        $sth = $pdo->prepare("SELECT * FROM
            dicas as d inner join plantas_ornamentais as po
            inner join minhas_plantas as mp on po.nome_cientifico = mp.nome_cientifico
            WHERE mp.id_planta = " . $id);

        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $erro) {
        echo "Error: " . $erro->getMessage();
    }

}

$array_dicas = dicas();
$array = detalhes();

$temperatura = number_format((double) $array['temperatura'], 1);
$umidade = number_format((double) $array['umidade'], 1);
$nivel_agua = number_format((double) $array['nivel_agua'], 1);
$iluminacao = number_format((double) $array['iluminacao'], 1);
