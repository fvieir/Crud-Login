<?php

class OrdemServicoController extends Controller {


    public function index (){
    
        $OrdemServico = new OrdemServico();
        $dados = $OrdemServico->numeroAutomatico();
        $this->CarregarTemplate('ordemServico',$dados);
        
    }

    public function cadastrar ()
    {

        $OrdemServico = new OrdemServico();

        $sendCadastro = filter_input(INPUT_POST,'sendCadastro', FILTER_SANITIZE_STRING);

        if (isset($sendCadastro)) {
            
            $codigo  = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
            $tag     = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_STRING);
            $tipman  = filter_input(INPUT_POST, 'tipman', FILTER_SANITIZE_STRING);
            $setexe  = filter_input(INPUT_POST, 'setexe', FILTER_SANITIZE_STRING);
            $resp    = filter_input(INPUT_POST, 'resp', FILTER_SANITIZE_STRING);
            $aplic   = filter_input(INPUT_POST, 'aplic', FILTER_SANITIZE_STRING);
            $estado  = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
            $cidade  = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
            $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
            $filial  = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_STRING);
            $regserv = filter_input(INPUT_POST, 'regserv', FILTER_SANITIZE_STRING);
        
            $dados = $OrdemServico->cadastrar($codigo,$tag,$tipman,$setexe,$resp,$aplic,
                                        $estado,$cidade,$empresa,$filial,$regserv);
            if ($dados == 1) {
                $this->CarregarTemplate('listarOrdem',$dados); 
            }else {
                echo"falhou";
            }

        } else {
            exit;
        }
         

    }

}