
<?php

header('Content-type: application/json');

include_once ("Models/Usuarios.php") ;
include_once ("Models/Dogs.php") ;

if ('REQUEST_METHOD' == 'POST') {
    
	$client_data = file_get_contents("php://input");
        
        var_dump($client_data); 
        
        
        echo 'fdjajfdksafdasfds';
        
}




