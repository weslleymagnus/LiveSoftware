<?php

namespace Model\Negocio;

class Cliente extends  AppModel{
    
    protected $nome;
    protected $cpf;
    protected $login;
    protected $senha;
    
    public function __construct($nome = null, $cpf = null, $login = null, $senha = null){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->login = $login;
        $this->senha = $senha; 
    }
    
    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getCpf(){
        return $this->cpf;
    }
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
    public function getLogin(){
        return $this->login;
    }
    public function setLogin($login){
        $this->login = $login;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
}