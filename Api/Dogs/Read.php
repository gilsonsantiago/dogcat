<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Methods: GET");
header('Content-type: application/json');


include_once ("../../Models/Usuarios.php") ;
include_once ("../../Models/Dogs.php") ;


$dog =  new dogs();

$retorno = $dog->readDogs();
        
$qta = $retorno->rowCount();
        
        
if ($qta > 0) {
            
    $objdog['data'] = array();
        
 // $objdog ['data'] = array();
             
    while ($rows = $retorno->fetch(PDO::FETCH_ASSOC)){
             
        extract ($rows);
            
        $itens = array (

            'id' => $id,
            'nome' => $nome,
            'registro' => $registro,
            'cidade' => $cidade,
            'datanascto' => $datanascto,
            'idade' => $idade,
            'raca' => $raca,
            'sexo' => $sexo,
            'cor' =>  $cor,
            'pelo' => $pelo,
            'foto' => $foto,
            'proprietario' => $proprietario,
            'dataCadastro' => $datacadastro                 
                 
        );
             
        array_push($objdog ['data'] , $itens );
                 
    }
             
    echo json_encode($objdog);
               
    }
    else
    {
            
        echo json_encode (["message", "Não existe registro"]);
            
    }    