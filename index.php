<?php 

//Constantes básicas
define("DS", DIRECTORY_SEPARATOR);//Separador de diretório
define("ROOT", dirname(__FILE__));//caminho local completo até index.php
define("WEBROOT", "http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/");//Caminho web até o index.php

//String's de conecções
define("ENGINE", "mysql");//SGBD usado
define("HOST", "localhost");//Indereço do BD
define("DATABASE", "");//Nome do banco do BD
define("DB_USER", "");//Nome do usuário BD
define("BD_PASSW", "");//Senha do usuário BD

//Carraga a classe autoloard 
require "autoload.php";

//Verivicar se o querimento da página existe
if(count($_REQUEST) > 0){
    $classe = $_REQUEST['class'];//carrega a classe do projeto
    $metodo = $_REQUEST['acao'];//carrega a ação(função) execultada
    
    $classe = "Controller\\" . $classe . "Controller";//Caminho para a classe 
    $controller = new $classe();//Instácia a classe solicitada  
    
    //Verificar se existe parametro acão
    if(isset($_REQUEST['param'])){
        $controller->$metodo($_REQUEST['param']);//chama o método da ação com o parametro 
    }else{
        $controller->$metodo();//método sem parametro
    }

}else{
    header('Content-Type: text/html; charset=utf-8');
    echo "ERRO";   
}