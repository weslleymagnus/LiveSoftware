<?php

namespace Controller;

use View\AppView;//Carrega a classe AppView que chama as outras classes da view
use App\Application;//Carrega a classe Application

/*
 * Classe Geral dos controladores, são responsaveis 
 * por inicializar os métodos de comunicação com os 
 * model e a view  que será herdado por todos os 
 * controladores
 */
 class AppController extends Application{
     protected $view;
     
     public function __construct(){
         parent:: __construct();
         $this->initView();
     } 
     
     //Função responsável por carregar a model de negocio
     protected function loadModel($model){
        $model = "Model\\Negocio\\".$model;//carrega o caminho
        $model = new $model();//Cria uma nova instância da classe
        return $model; 
     }
     
     //Método para iniciar a view
     protected function initView(){
      $this->view= new AppView();   
     }
     
     //Método que verifica a requisição feita ao controller existe
     protected function request_is($request){
         if($_SERVER['REQUEST_METHOD'] == $request){
             return true;
        }else{
             return false;
        }   
    }
    
    //Método que captura os dados enviados por GET, POST ou PUT
    protected function params($param){
        return $_REQUEST[$param];//Retornar o que esta contido em GET, POST ou PUT
    }
    
    //Método que carrega o Model do BD
    public function loadDAO($dao){
        $dao = "Model\\DAO\\".$dao;//Caminho das classes contidas na pasta DAO
        $dao = new $dao();//Nova instância da DAO
        return $dao;
    }
     
}