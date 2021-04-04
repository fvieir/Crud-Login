<?php

class homeController extends Controller {

    public function index (){
       
        $this->CarregarTemplateLogin('home',$dados = '');

    }
    
    public function CarregarTemplateLogin($dadosView, $dados){

        require 'View/templateLogin.php';

    }

}   