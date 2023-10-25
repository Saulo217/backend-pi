<?php

function NewConnection($banco=null){
    $server="127.0.0.1:3306";
    $user="root";
    $password="";



    try{
    $pdo= new PDO("mysql:host=$server,dbname=$user,$password");


    }catch(PDOException $erro){
    echo "Erro: ".$erro->getMessage();
    
}
    return $pdo;

}
?>