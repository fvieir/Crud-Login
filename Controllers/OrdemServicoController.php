<?php

class OrdemServicoController extends Controller {


    public function index (){
    
        $OrdemServico = new OrdemServico();
        $dados = $OrdemServico->numeroAutomatico();
        $this->CarregarTemplate('ordemServico',$dados);
        
    }

    public function cadastrar (){
        
      

        //$this->CarregarTemplate('editarOrdem',$dados);   

    }

}