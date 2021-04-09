<?php

class OrdemServicoController extends Controller {

    public $dados;
    public $id;

    public function index (){
    
        $OrdemServico = new OrdemServico();
        $dados = $OrdemServico->numeroAutomatico();
        $this->CarregarTemplate('ordemServico',$dados);
        
    }

    public function cadastrar ()
    {
        $sendCadastro = filter_input(INPUT_POST,'sendCadastro', FILTER_SANITIZE_STRING);

        if (isset($sendCadastro)) 
        {
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
        
            try {
                $OrdemServico = new OrdemServico();
                $dados = $OrdemServico->cadastrar($codigo,$tag,$tipman,$setexe,$resp,$aplic,
                                        $estado,$cidade,$empresa,$filial,$regserv);
                
            header("Location: ../ordemServicoController/Listar");

            } catch (Exception $e) {
                session_start();
                $_SESSION['msg'].= "<div class='alert alert-danger'> {$e->getMessage()} </div>";
                header("Location: ../ordemServicoController");
            }

        } else {
            exit;
        }
    }

    public function Listar ()
    {
        $OrdemServico = new ordemServico();
        $dados = $OrdemServico->listar();
        $this->CarregarTemplate('listarOrdem',$dados); 
    }

    public function Apagar(){
        
        $id = filter_input(INPUT_GET, 'pag', FILTER_SANITIZE_STRING); 
        $id = explode('/',$id);
        $id = $id[2];
       
        try {
            $OrdemServico = new ordemServico();
            $dados = $OrdemServico->apagar($id);

            session_start();
            $_SESSION['msg'].= "<div class='alert alert-success'>Exluido com sucesso!
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
            header("Location: ../../ordemServicoController/Listar");

        } catch (Exception $e) {
            echo $e->getMessage();
            exit;
        }
    }

    public function Visualizar() 
    {
        $id = filter_input(INPUT_GET, 'pag', FILTER_SANITIZE_STRING); 
        $id = explode('/',$id);
        $id = $id[2];

        try {
            $OrdemServico = new ordemServico();
            $dados = $OrdemServico->visualizar($id);

            $this->CarregarTemplate('visualizarOrdem',$dados);

        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

}