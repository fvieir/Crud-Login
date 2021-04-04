<?php

class ordemServico extends Controller {

    public function index (){
       
        $this->CarregarTemplate('ordemServico',$dados = '');

    }

    public function editar (){
        
        $this->CarregarTemplate('editarOrdem',$dados = '');   

    }

}