<?php

class Core {

    public function __construct(){
        $this->run();

    }

    public function run(){

        if(isset($_GET['pag'])){

            $url = $_GET['pag'];

            if (isset($url) && !empty($url)) {
        
                $url = explode('/',$url);// Separando classe/Metodo/Paramentros
                $controller = $url[0]; // Atribuinto nome da classe no controller
                array_shift($url); // apagando primeira posição do controller, para verificar se tem meotodo
                
                if (isset($url) && !empty($url)) { // Verifica se tem metodo
                    $metodo = $url[0]; // Atribui na variavel metodo a posição 0 do array
                    array_shift($url); // apagando primeira posição do controller, para verificar se tem paramentros
                   
                } else {
                    $metodo = 'index'; // se não tiver meotodo, atribiu o valor padrão
                }
            
                $parametro = count($url) > 0 ? $url[0] : ''; // Contagem do array, para verificar sem tem conteudo

            }           
        }else { // Se não existir url, os valores serão padrão
            $controller = 'homeController';
            $metodo = 'index';
            $parametro = array();
           
        }

        $caminho = 'Controllers/'.$controller.'.php';
             
        // Verifica se não tem o caminho no diretorio de pastas
        if(!file_exists($caminho) && !method_exists($controller,$metodo)){
            $controller = 'homeController'; // Se usuario tentar digitar um caminho, pode chamar a classe error com mensagem erro 404 pagina não encontrada.
            $metodo = 'index';     
        }

        // instancia classe digitada na url
        $object = new $controller;
        // Não é possível chamar o metodo dessa foram $object->{$metodo}, solução é usar a função
        call_user_func_array(array($object,$metodo), array($parametro));
    }

}