<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET");
header('Content-type: application/json');


include_once ("../../Models/Usuarios.php");
include_once ("../../Models/Dogs.php");

$dog = new dogs();

if (!isset($_GET['id'])){
    
   echo json_encode(['message', ' Não foi possivel fazer a pesquisa.']);
   
   die();
   
}


$dog->setId($_GET['id']);


$retorno = $dog->readDogsId();


if ($retorno->rowCount() > 0) {

    $itens = array(
        'id' => $dog->getId(),
        'nome' => $dog->getNome(),
        'registro' => $dog->getRegistro(),
        'cidade' => $dog->getCidade(),
        'datanascto' => $dog->getDatanascto(),
        'idade' => $dog->getIdade(),
        'raca' => $dog->getRaca(),
        'sexo' => $dog->getSexo(),
        'cor' => $dog->getCor(),
        'pelo' => $dog->getPelo(),
        'foto' => $dog->getFoto(),
        'proprietario' => $dog->getProprietario(),
        'dataCadastro' => $dog->getDatacadastro()
    );

    echo json_encode($itens);
    
} else {

    echo json_encode(['message', 'Registro não encontrado']);
}    
