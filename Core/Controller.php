<?php

class Controller {

    public $dados;

    public function __construct(){
        $this->dados;
    }

    public function CarregarTemplate($dadosView){

        require 'View/template.php';

    }

    public function CarregarViewNoTemplate($dadosView){

        require 'View/'.$dadosView.'.php';

    }

}