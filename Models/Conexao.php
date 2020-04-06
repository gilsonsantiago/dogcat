<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author Gilson
 */


include_once 'config.php';

class Conexao {
   
    private $PDO;
     
    public function conectar()
    {
        
        if (!isset($this->PDO))
        {
           $this->PDO  = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, 
		                           MYSQL_USER, MYSQL_PASSWORD ); 
           
           return $this->PDO;
           
           
        }
           else
        {
           return $this->PDO  ;       
        }
        
     }
     
     public static function deconectar()
     {
         return $this->PDO = '';    
     }
}
