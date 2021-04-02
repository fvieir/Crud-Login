<?php

class ordemServico extends Controller {

    public function index (){
       
        $this->CarregarTemplate('ordemServico');

    }

    public function editar (){
        
        $this->CarregarTemplate('editarOrdem');   

    }

}