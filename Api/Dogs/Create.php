<?php

header('HTTP: 1.0');

header("Access-Control-Allow-Origin: *");
header('Content-type: application/json');

//  header("Access-Control-Allow-Headers: *");

include_once ("../../Models/Usuarios.php") ;
include_once ("../../Models/Dogs.php") ;


$dados = json_decode(file_get_contents('php://input'));

$dog =  new dogs();

$dog->criarRegistro();

$dog->setNome($dados->nome);
$dog->setRegistro($dog->getRegistro());
$dog->setCidade($dados->cidade);
$dog->setIdade($dados->idade);
$dog->setRaca($dados->raca);
$dog->setCor($dados->cor);
$dog->setSexo($dados->sexo);
$dog->setPelo($dados->pelo);
$dog->setFoto('');
$dog->setProprietario('1');


if ($dog->createcadastro()){
    
    echo json_encode(['message:', 'Cadastrado com sucesso']);
    
}
 else
{
    
     echo json_encode(['message:', 'Erro ao gravar']);
     
 }
