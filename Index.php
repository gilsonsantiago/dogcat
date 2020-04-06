
        <?php
        
        include_once ("Models/Usuarios.php") ;
        include_once ("Models/Dogs.php") ;
        
        $usuario = new Usuarios();
        
        $usuario->criarCodigo();
        
        $usuario->setSenha(md5('1234567890'));
        
        $dog =  new dogs();
          
        $dog->criarRegitro();
         
                
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
            
            echo 'nenhum registro' ;
            
        }    
        
     
      
            
         
        ?>
    