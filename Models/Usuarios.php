<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuarios
 *
 * @author gsthi
 */


class Usuarios {
    //put your code here
    
    private $id;
    private $codigo;
    private $nome;
    private $usuario;
    private $senha;
    private $ativo;
    private $nivel;
    private $endereco;
    private $cidade;
    private $doccpf;
    private $celular;
    private $data;
    
    function getData() {
        return $this->data;
    }

    function setData($data) {
        $this->data = $data;
    }

        
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNome() {
        return $this->nome;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getAtivo() {
        return $this->ativo;
    }

    function getNivel() {
        return $this->nivel;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getDoccpf() {
        return $this->doccpf;
    }

    function getCelular() {
        return $this->celular;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setDoccpf($doccpf) {
        $this->doccpf = $doccpf;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

  
    public function criarCodigo(){
        $this->codigo = time();
    }
    
    
}
