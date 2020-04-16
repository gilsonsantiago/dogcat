<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: DELETE");
header('Content-type: application/json');


include_once ("../../Models/Usuarios.php") ;
include_once ("../../Models/Dogs.php") ;

$dog =  new dogs();

if (!isset($_GET['id'])) {

    echo json_encode(['message: ', ' Não especificado o ID. ']);

    die();
}

$dog->setId($_GET['id']);

$retorno = $dog->deletar();

if ($retorno) {

    echo json_encode(['message ', $dog->getid() . ' -  Registro deletado com sucesso...']);
} else {
    echo json_encode(['message: ', ' Não foi possível apagar. ']);
}    
    
    

    
  