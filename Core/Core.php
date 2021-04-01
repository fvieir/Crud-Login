<?php

class Core {

    public function __construct(){
        $this->run();

    }

    public function run(){

        if(isset($_GET['pag'])){

            $url = filter_input(INPUT_GET, 'pag', FILTER_SANITIZE_URL);

            if (isset($url) && !empty($url)) {
        
                $url = explode('/',$url);
                $controller = $url[0];
                array_shift($url);

            }

            if (isset($url) && !empty($url)) {
                $metodo = $url[0];
                array_shift($url);
               
            } else {
                $metodo = 'index';
            }

            $parametro = count($url) > 0 ? $url[0] : '';
           

        }else { // Se não existir url, os valores serão padrão
            $controller = 'homeController';
            $metodo = 'index';
            $parametro = array();
        }

        $caminho = '/url_amigavel_1/Controllers/'.$controller;

        if(!file_exists($caminho) && !method_exists($controller,$metodo)){
            $controller = 'homeController';
            $metodo = 'index';
           
        }

        // instancia classe digitada na url
        $object = new $controller;
        // Não é possível chamar o metodo dessa foram $object->{$metodo}, solução é usar a função
        call_user_func_array(array($object,$metodo), array($parametro));
    }

}