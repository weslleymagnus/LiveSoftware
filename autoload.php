<?php
//Carregar o caminho das classes da pasta APP
function loadApp($classe) {
    autoload('App\\'.$classe);
}

//Carregar o caminho das classes da pasta Libs
function loadLibs($classe) {
    autoload($classe);
}

//Carrega o caminho obtido pela função loadApp ou LoadLibs 
function autoload($className) {
    $className = ltrim($className, '\\');//Retira os espaços
    $fileName  = '';//caminho da pasta
    $namespace = '';//caminho do namespace
    
    //Se a existi a classe 
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);//Pega toda a string passada pelo parametro
        $className = substr($className, $lastNsPos + 1);//Pega toda a string passada pelo parametro e soma +1
        $fileName  = str_replace('\\', DS, $namespace) . DS;//substituir todos as string's barra pela constante DS 
    }

    $fileName .= str_replace('_', DS, $className) . '.php';//Concatena as string's substituido as '_' por barras 
    
    //checa se o arquivo do diretório existe 
    if(file_exists($fileName)) {
        require $fileName;//Carrega todos as diretórios
    }
}

spl_autoload_register('loadApp');//Registra a função dada como implementação de App
spl_autoload_register('loadLibs');//Registra a função dada como implementação de Libs
spl_autoload_extensions(".php");
