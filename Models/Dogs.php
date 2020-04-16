<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Dogs
 *
 * @author gsthi
 */


include_once("Conexao.php");

class Dogs {
   
    //put your code here
    
    private $id;
    private $registro;
    private $nome;
    private $cidade;
    private $datanascto;
    private $idade;
    private $raca;
    private $sexo;
    private $cor;
    private $pelo;
    private $foto;
    private $proprietario;
    private $datacadastro;
    
          
   // sets e getes  -----------------------------
    
    function getId() {
        return $this->id;
    }

    function getRegistro() {
        return $this->registro;
    }

    function getNome() {
        return $this->nome;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getDatanascto() {
        return $this->datanascto;
    }

    function getIdade() {
        return $this->idade;
    }

    function getRaca() {
        return $this->raca;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCor() {
        return $this->cor;
    }

    function getPelo() {
        return $this->pelo;
    }

    function getFoto() {
        return $this->foto;
    }

    function getProprietario() {
        return $this->proprietario;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRegistro($registro) {
        $this->registro = $registro;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setDatanascto($datanascto) {
        $this->datanascto = $datanascto;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setRaca($raca) {
        $this->raca = $raca;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setPelo($pelo) {
        $this->pelo = $pelo;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setProprietario($proprietario) {
        $this->proprietario = $proprietario;
    }

    function setDatacadastro($datacadastro) {
        $this->datacadastro = $datacadastro;
    }

          
   // Metodos  ---------------------------------------
    
   public function criarRegistro(){
       
       $this->registro = time() + 1;
   }
   
   
   //   htmlspecialchars(strip_tags())
   
   
   public function readDogs(){
       
     $pdo = new Conexao();
     
     $sqlpre = $pdo->conectar();
     
     $sql = "SELECT * FROM dogs " ;
     
     $resulta = $sqlpre->prepare($sql);
     
     $resulta->execute();
     
     return ($resulta);
     
   }
   
  public function readDogsId(){
       
     $pdo = new Conexao();
     
     $sqlpre = $pdo->conectar();
     
     $sql = "SELECT * FROM dogs WHERE id = :id LIMIT 1" ;
     
     $resulta = $sqlpre->prepare($sql);
     
     $this->id = htmlspecialchars(strip_tags($this->id));
     
     
     $resulta->bindParam (':id', $this->id);
     
     $resulta->execute();
     
     $retorno = $resulta->fetch(PDO::FETCH_ASSOC);
     
     // $this->id = $retorno['id'];
     
     $this->nome = $retorno['nome'];
     $this->cidade  = $retorno['cidade'];
     $this->datanascto = $retorno['datanascto'];
     $this->idade = $retorno['idade'];
     $this->pelo = $retorno['pelo'];
     $this->cor = $retorno['cor'];
     $this->proprietario = $retorno['proprietario'];
     $this->sexo = $retorno['sexo'];
     $this->raca = $retorno['raca'];
     $this->datacadastro = $retorno['datacadastro'];
     $this->foto = $retorno['foto'];
     $this->registro = $retorno['registro'];
             
         
     return ($resulta);
     
   } 
   
   
   public function deletar(){
       
     $pdo = new Conexao();
     
     $sqlpre = $pdo->conectar();
     
     $sql = "DELETE FROM dogs WHERE id = :id " ;
     
     $resulta = $sqlpre->prepare($sql);
     
     $this->id = htmlspecialchars(strip_tags($this->id));
     
     $resulta->bindParam (':id', $this->id);
     
     return ($resulta->execute());
          
   }
   
   
   
   public function createcadastro(){
       
     $pdo = new Conexao();
     
     $sqlpre = $pdo->conectar();
         
     $sql = "INSERT INTO dogs ( nome, registro, cidade, idade, raca, sexo, cor, pelo, foto, proprietario, datanascto) "
             . "values "
             . "( :nome, :registro, :cidade, :idade, :raca, :sexo, :cor, :pelo, :foto, :proprietario , :datanascto )";
         
       
     $resulta = $sqlpre->prepare($sql);
    
     
     $this->nome = htmlspecialchars(strip_tags($this->nome));
     $this->cidade = htmlspecialchars(strip_tags($this->cidade));
     $this->idade = htmlspecialchars(strip_tags($this->idade));
     $this->raca = htmlspecialchars(strip_tags($this->raca));
     $this->sexo = htmlspecialchars(strip_tags($this->sexo));
     $this->cor = htmlspecialchars(strip_tags($this->cor));
     $this->pelo = htmlspecialchars(strip_tags($this->pelo));
     
      
      $resulta->bindvalue (':nome', $this->nome);
      $resulta->bindvalue (':registro', $this->registro);
      $resulta->bindvalue (':cidade', $this->cidade);
      $resulta->bindvalue (':idade', $this->idade);
      $resulta->bindvalue (':raca', $this->raca);
      $resulta->bindvalue (':sexo', $this->sexo);
      $resulta->bindvalue (':cor', $this->cor);
      $resulta->bindvalue (':pelo', $this->pelo);
      $resulta->bindvalue (':foto', $this->foto);
      $resulta->bindvalue (':datanascto', $this->datanascto);
              
              
      $resulta->bindvalue (':proprietario', $this->proprietario);
      
                 
      return($resulta->execute());
      
           
    
   }
   
   
    
   
   public function updateAtualizar(){
       
     $pdo = new Conexao();
     
     $sqlpre = $pdo->conectar();
         
     
     $sql = "UPDATE dogs SET  nome = :nome,"
             . " registro = :registro , "
             . "cidade = :cidade, "
             . "idade = :idade, "
             . "raca = :raca, "
             . "sexo = :sexo, "
             . "cor = :cor, "
             . "pelo = :pelo, "
             . "foto = :foto, "
             . "proprietario = :proprietario "
             . "WHERE id = :id" ;
         
       
     $resulta = $sqlpre->prepare($sql);
      
      $resulta->bindValue(':id', $this->id);
   
          
      $resulta->bindvalue (':nome', $this->nome);
      $resulta->bindvalue (':registro', $this->registro);
      $resulta->bindvalue (':cidade', $this->cidade);
      $resulta->bindvalue (':idade', $this->idade);
      $resulta->bindvalue (':raca', $this->raca);
      $resulta->bindvalue (':sexo', $this->sexo);
      $resulta->bindvalue (':cor', $this->cor);
      $resulta->bindvalue (':pelo', $this->pelo);
      $resulta->bindvalue (':foto', $this->foto);
      $resulta->bindvalue (':proprietario', $this->proprietario);
      
                   
      return($resulta->execute());
           
    
   }
   
   
   
    
}

