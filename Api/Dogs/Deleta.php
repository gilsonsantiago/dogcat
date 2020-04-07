<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: DELETE");
header('Content-type: application/json');


include_once ("../../Models/Usuarios.php") ;
include_once ("../../Models/Dogs.php") ;

$dog =  new dogs();

$dog->setId($_GET['id']); 

$retorno = $dog->deletar();



echo json_encode(['message ' , $dog->getid() . ' -  Registro deletado com sucesso...']);