<?php

class homeAutenticada extends Controller {

    public function index (){
       
        $this->CarregarTemplate('homeAutenticada',$dados = '');

    }

    public function editar (){
        
        $this->CarregarTemplate('editarOrdem',$dados = '');   

    }

}