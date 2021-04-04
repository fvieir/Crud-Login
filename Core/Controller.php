<?php

class Controller {

    public $dados;

    public function __construct(){
        $this->dados;
    }

    public function CarregarTemplate($dadosView, $dados){

        require 'View/template.php';

    }

    public function CarregarViewNoTemplate($dadosView,$dados){

        //extract($dados =array());
        require 'View/'.$dadosView.'.php';

    }

}