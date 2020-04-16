<?php

header('HTTP: 1.0');

header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');
// header("Access-Control-Allow-Methods: UPDATE");


//  header("Access-Control-Allow-Headers: *");

include_once ("../../Models/Usuarios.php") ;
include_once ("../../Models/Dogs.php") ;


$dados = json_decode(file_get_contents('php://input'));

$dog =  new dogs();

$dog->setId($dados->id);
$dog->setNome($dados->nome);
$dog->setRegistro($dados->registro);
$dog->setCidade($dados->cidade);
$dog->setIdade($dados->idade);
$dog->setRaca($dados->raca);
$dog->setCor($dados->cor);
$dog->setSexo($dados->sexo);
$dog->setPelo($dados->pelo);
$dog->setFoto('');
$dog->setProprietario($dados->proprietario);
$dog->setDatanascto($dados->datanascto);


if ($dog->updateAtualizar())
{
    
    echo json_encode(['message:', 'Atualizado com sucesso']);
    
}
 else
{
    
     echo json_encode(['message:', 'Erro ao Atualizar']);
     
 }
